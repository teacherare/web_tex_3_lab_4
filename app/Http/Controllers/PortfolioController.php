<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\WebsiteEvaluation;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('sahifalar.home', [
            'jami' => 70,
            'scopus' => 20
        ]);
    }

    public function education()
    {
        return view('sahifalar.education');
    }

    public function experience()
    {
        return view('sahifalar.experience');
    }

    public function publications()
    {
        return view('sahifalar.publications');
    }

    public function teaching()
    {
        $fanlar = [
            'Web Technologies',
            'Artificial Intelligence',
            'Databases',
            'Big Data and Data Analysis'
        ];
        return view(
            'sahifalar.teaching',
            compact('fanlar')
        );
    }

    public function students()
    {
        return view('sahifalar.students');
    }

    public function other()
    {
        return view('sahifalar.other');
    }

    public function connection()
    {
        return view('sahifalar.connection');
    }

    public function xabarSaqla(Request $request)
    {
        $validated = $request->validateWithBag(
            'xabarForma',
            [
                'ism' => 'required|string|max:50',
                'fam' => 'nullable|string|max:50',
                'bogliq' => 'nullable|string|max:150',
                'email' => 'nullable|email|max:255',
                'ij_tarmoq_1' => 'required|string|max:50',
                'ij_tarmoq' => 'required|url|max:255',
                'tel' => 'nullable|string|max:30',
                'xabar' => 'required|string|max:3000',
                'rasm' => 'nullable|image|max:2048',
                'fayl' => 'nullable|file|mimes:pdf,doc,docx,zip|max:5120',
            ]
        );
        $rasmYul = null;
        $faylYul = null;
        if ($request->hasFile('rasm')) {
            $rasmYul = $request
                ->file('rasm')
                ->store('xabar-rasmlar', 'public');
        }

        if ($request->hasFile('fayl')) {
            $faylYul = $request
                ->file('fayl')
                ->store('xabar-fayllar', 'public');
        }
        Message::create([
            'ism' => $validated['ism'],
            'fam' => $validated['fam'] ?? null,
            'aloqa' => $validated['bogliq'] ?? null,
            'email' => $validated['email'] ?? null,
            'ij_tarmoq_turi' => $validated['ij_tarmoq_1'],
            'ij_tarmoq_manzili' => $validated['ij_tarmoq'],
            'tel' => $validated['tell'] ?? null,
            'xabar' => $validated['xabar'],
            'rasm' => $rasmYul,
            'file' => $faylYul,
        ]);
        return redirect()
            ->route('conn')
            ->with(
                'muvaffaqiyotli_xabar',
                'Xabaringiz muvaffaqiyotli yuborildi!'
            );
    }

    public function bahoSaqla(Request $request)
    {
        $validated1 = $request->validateWithBag(
            'bahoForma',
            [
                'a' => 'required|string|max:100',
                'b' => 'nullable|string|max:100',
                'c' => 'nullable|image|max:2048',
                'd' => 'required|in:1,2,3',
                'e' => 'nullable|array',
                'e.*' => 'in:1,2,3',
                'xabar1' => 'required|string|max:3000',
                'f' => 'required|integer|between:0,100',
                'g' => 'required|integer|between:0,100',
                'h' => 'required|integer|between:0,100',
            ]
        );
        $fotoYul = null;
        if ($request->hasFile('c')) {
            $fotoYul = $request
                ->file('c')
                ->store('baho-rasmlar', 'public');
        }
        WebsiteEvaluation::create([
            'name' => $validated1['a'],
            'contact_info' => $validated1['b'] ?? null,
            'photo' => $fotoYul,
            'user_level' => $validated1['d'],
            'evaluation_sections' => $validated1['e'] ?? [],
            'feedback' => $validated1['xabar1'],
            'content_rating' => $validated1['f'],
            'design_rating' =>  $validated1['g'],
            'functionality_rating' => $validated1['h'],
        ]);

        return redirect()
            ->route('conn')
            ->with(
                'muvaffaqiyotli_baho',
                'Web sayt muvaffaqiyatli baholandi!'
            );
    }
}
