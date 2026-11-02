@extends('shablon.layout')
@section('asosiy_qism')
<div class="b-example-divider b-example-vr container">
  <h2 class="text-info display-6 my-4">Any message or comment you leave is truly valuable and greatly appreciated
  </h2>
  <div class="toast show matn_soha">
    <div class="toast-header">
      <strong class="me-auto">
        Please Note!
      </strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
    </div>
    <div class="toast-body">
      <p>
        This page contains two forms. Through the form titled “Leave a Message,” you may share various messages
        within your field of interest, as well as information that may be useful for me. Through the form titled
        “Evaluate the Website,” you are welcome to provide your feedback and suggestions to help improve our
        website.
      </p>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-md-2 gap-3 m-5">
    <div class="row">
      <button type="button" class="btn btn-outline-primary btn-lg shadow-lg w-75" data-bs-toggle="modal"
        data-bs-target="#form_1">
        Leave a Message
      </button>
    </div>
    <div class="row">
      <button type="button" class="btn btn-outline-success btn-lg shadow-lg w-75" data-bs-toggle="modal"
        data-bs-target="#form_2">
        Evaluate the Website
      </button>
    </div>
  </div>
  <!-- The Modal form_1-->
  <div class="modal" id="form_1">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Leave a Message</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          @if(session('muvaffaqiyotli_xabar'))
          <div class="alert alert-success">
            {{ session('muvaffaqiyotli_xabar') }}
          </div>
          @endif
          <form action="{{ route('xabar.saqla') }}" method="POST" enctype="multipart/form-data" class="row align-items-start">
            @csrf
            <div class="col-sm-12 col-md-6 col-lg-4 my-3 ">
              <label for="ism" class="form-label text-info ">Name<b class="text-danger"> *</b></label>
              <input type="text" name="ism" required placeholder="Enter your name" autofocus id="ism"
                class="form-control  
                  @if($errors->xabarForma->has('ism'))
                   is-invalid
                  @elseif(old('ism') !== null)
                  is-valid
                  @endif
                "
                value="{{ old('ism') }}">
              @error('ism', 'xabarForma')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror

            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-3">
              <label for="fam" class="form-label text-info">Surname</label>
              <input type="text" name="fam" placeholder="Enter your last name" id="fam" class="form-control @if($errors->xabarForma->has('fam'))
                   is-invalid
                  @elseif(old('fam') !== null)
                  is-valid
                  @endif" value="{{ old('fam') }}">
              @error('fam', 'xabarForma')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-3">
              <label for="bogliq" class="form-label text-info">Relationship</label>
              <input type="text" name="bogliq" placeholder="Enter your relationship with me" list="aloqadorlik"
                id="bogliq"
                class="
                 form-control 
                 @if($errors->xabarForma->has('bogliq'))
                   is-invalid
                  @elseif(old('bogliq') !== null)
                  is-valid
                  @endif"
                value="{{ old('bogliq') }}">
              @error('bogliq', 'xabarForma')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
              <datalist id="aloqadorlik">
                <option value="Collaborating Researcher"></option>
                <option value="Mentee"></option>
                <option value="Researcher"></option>
                <option value="Other"></option>
              </datalist>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-3">
              <label for="email" class="form-label text-info">Email</label>
              <input type="email" name="email" placeholder="Enter your email address" id="email"
                class="
                form-control
                @if($errors->xabarForma->has('email'))
                   is-invalid
                  @elseif(old('email') !== null)
                  is-valid
                  @endif
                " value="{{ old('email') }}">
              @error('email', 'xabarForma')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-3">
              <label for="ij_tarmoq"
                title="Enter the URL of your social media profile starting with https://. For example: https://t.me/a_r_e_22"
                class="form-label text-info">
                Social media<b class="text-danger"> *</b>
              </label>
              <div class="input-group">
                <select name="ij_tarmoq_1" required class="
                form-select 
                @if($errors->xabarForma->has('ij_tarmoq_1'))
                   is-invalid
                  @elseif(old('ij_tarmoq_1') !== null)
                  is-valid
                  @endif">
                  <option {{ old('ij_tarmoq_1') == 'Telegram' ? 'selected' : '' }}>Telegram</option>
                  <option {{ old('ij_tarmoq_1') == 'WhatsApp' ? 'selected' : '' }}>WhatsApp</option>
                  <option {{ old('ij_tarmoq_1') == 'Facebook' ? 'selected' : '' }}>Facebook</option>
                </select>
                <input type="url" name="ij_tarmoq" required id="ij_tarmoq" value="{{ old('ij_tarmoq') }}"
                  placeholder="Enter the URL of your social media profile" class="form-control w-50 
                  @if($errors->xabarForma->has('ij_tarmoq'))
                   is-invalid
                  @elseif(old('ij_tarmoq') !== null)
                  is-valid
                  @endif">
                @error('ij_tarmoq_1', 'xabarForma')
                <div class="text-danger">
                  {{ $message }}
                </div>
                @enderror
                @error('ij_tarmoq', 'xabarForma')
                <div class="text-danger">
                  {{ $message }}
                </div>
                @enderror
              </div>

            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-3">
              <label for="tel" class="form-label text-info">Mobile Number</label>
              <input type="tel" name="tel" id="tel" placeholder="Enter your phone number using digits only"
                class="form-control
                @if($errors->xabarForma->has('tel'))
                   is-invalid
                  @elseif(old('tel') !== null)
                  is-valid
                  @endif"
                value="{{ old('tel') }}">
              @error('tel', 'xabarForma')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 my-3">
              <label for="xabar" class="form-label text-info">Your Message<b class="text-danger"> *</b></label>
              <textarea name="xabar" id="xabar" required class="form-control 
              @if($errors->xabarForma->has('xabar'))
                   is-invalid
                  @elseif(old('xabar') !== null)
                  is-valid
                  @endif"
                placeholder="Please enter your message in this field"> {{ old('xabar') }}
              </textarea>
              @error('xabar', 'xabarForma')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-3">
              <label for="rasm" class="form-label text-info">Photo</label>
              <input type="file" name="rasm" id="rasm" accept="image/*" class="form-control
              @if($errors->xabarForma->has('rasm'))
                   is-invalid
                  @elseif(old('rasm') !== null)
                  is-valid
                  @endif">
              @error('rasm', 'xabarForma')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-3">
              <label for="fayl" class="form-label text-info">File</label>
              <input type="file" name="fayl" accept="image/*, audio/*, video/*, .docx, .doc, .pdf" id="fayl"
                class="form-control
                @if($errors->xabarForma->has('fayl'))
                   is-invalid
                  @elseif(old('fayl') !== null)
                  is-valid
                  @endif">
              @error('fayl', 'xabarForma')
              <div class="text-danger">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-3 align-self-end">
              <button type="reset" class="btn btn-warning w-50">
                Clear
              </button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-3 align-self-end">
              <button type="submit" class="btn btn-primary w-50">
                Submit
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- The Modal form_2-->
  <div class="modal" id="form_2">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Evaluate the Website</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">

          @if(session('muvaffaqiyotli_baho'))
          <div class="alert alert-success"> {{
             session('muvaffaqiyotli_baho') }}
          </div>
          @endif

          <form action="{{ route('baho.saqla') }}" method="POST" enctype="multipart/form-data" class="row align-items-start" autocomplete="off">
            @csrf
            <div class="col-12 col-md-6 col-lg-4 my-3 form-floating">
              <input type="text" name="a" autofocus placeholder="Enter your first name or your full name" id="a"
                class="form-control" value="{{ old('a') }}">
              <label for="a" class="form-label text-info ms-3">Name<b class="text-danger"> *</b></label>
              @error('a', 'bahoForma')
              <div class="text-danger"> {{ $message }} </div>
              @enderror

            </div>
            <div class="col-12 col-md-6 col-lg-4 my-3 form-floating">
              <input type="text" name="b" value="{{ old('b') }}"
                placeholder="Please leave your contact details (phone number, email address, or social media information)"
                id="b" class="form-control">
              <label for="b" class="form-label text-info ms-3">Contact Information</label>
              @error('b', 'bahoForma')
              <div class="text-danger"> {{ $message }} </div>
              @enderror
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-3">
              <label for="c" class="form-label text-info ">Photo</label>
              <input type="file" name="c" id="c" accept="image/*" class="form-control">
              @error('c', 'bahoForma')
              <div class="text-danger"> {{ $message }} </div>
              @enderror
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-3">
              <label class="form-label text-info ">Your Level in the Field<b class="text-danger"> *</b></label>
              <div class="form-check">
                <input type="radio" name="d" id="d1" value="1" class="form-check-input" {{ old('d') == '1' ? 'checked' : '' }}>
                <label for="d1" class="form-check-label">General User</label>
              </div>
              <div class="form-check">
                <input type="radio" name="d" id="d2" value="2" class="form-check-input" {{ old('d') == '2' ? 'checked' : '' }}>
                <label for="d2" class="form-check-label">Web Developer or Designer</label>
              </div class="form-check">
              <div>
                <input type="radio" name="d" id="d3" value="3" class="form-check-input" {{ old('d') == '3' ? 'checked' : '' }}>
                <label for="d3" class="form-check-label">Teacher or Instructor</label>
              </div>
              @error('d', 'bahoForma')
              <div class="text-danger"> {{ $message }} </div>
              @enderror
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-3">
              <label class="form-label text-info ">Website Evaluation Section</label>
              <div class="form-check">
                <input type="checkbox" name="e[]" id="e1" value="1" checked class="form-check-input"
                  {{ in_array('1', old('e', [])) ? 'checked' : '' }}>
                <label for="e1" class="form-check-label">Website Content Evaluation</label>
              </div>
              <div class="form-check">
                <input type="checkbox" name="e[]" id="e2" value="2" class="form-check-input"
                  {{ in_array('2', old('e', [])) ? 'checked' : '' }}>
                <label for="e2" class="form-check-label">Website Design Evaluation</label>
              </div>
              <div class="form-check">
                <input type="checkbox" name="e[]" id="e3" value="3" class="form-check-input"
                  {{ in_array('3', old('e', [])) ? 'checked' : '' }}>
                <label for="e3" class="form-check-label">Website Functionality Evaluation</label>
              </div>
              @error('e.*', 'bahoForma')
              <div class="text-danger"> {{ $message }} </div>
              @enderror
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-3">
              <label for="i" class="form-label text-info ">Feedback and Suggestions<b class="text-danger"> *</b></label>
              <textarea name="xabar1" id="i" rows="3" class="form-control"
                placeholder="Enter your feedback and suggestions in this field"> {{ old('xabar1') }}
              </textarea>
              @error('xabar1', 'bahoForma')
              <div class="text-danger"> {{ $message }} </div>
              @enderror
            </div>

            <div class="col-12 col-md-6 col-lg-4 my-3">
              <label for="f" class="form-label text-info ">Content Rating</label>
              <input type="range" name="f" step="5" class="form-range" value="{{ old('f') }}">
              @error('f', 'bahoForma')
              <div class="text-danger"> {{ $message }} </div>
              @enderror
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-3">
              <label for="g" class="form-label text-info ">Design Rating</label>
              <input type="range" name="g" step="5" class="form-range" value="{{ old('g') }}">
              @error('g', 'bahoForma')
              <div class="text-danger"> {{ $message }} </div>
              @enderror
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-3">
              <label for="h" class="form-label text-info ">Functionality Rating</label>
              <input type="range" name="h" step="5" class="form-range" value="{{ old('h') }}">
              @error('h', 'bahoForma')
              <div class="text-danger"> {{ $message }} </div>
              @enderror
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-3">
              <button type="reset" class="btn btn-warning btn-lg w-50">
                Clear
              </button>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 my-3">
              <button type="submit" class="btn btn-primary btn-lg w-50">
                Submit
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

</div>

@if($errors->xabarForma->any())
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const modalElement =
      document.getElementById('form_1');

    const modal =
      bootstrap.Modal.getOrCreateInstance(modalElement);

    modal.show();
  });
</script>
@endif

@if($errors->bahoForma->any())
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const modalElement = document.getElementById('form_2');
    const modal = bootstrap.Modal.getOrCreateInstance(modalElement);
    modal.show();
  });
</script>
@endif



@if(session('muvaffaqiyotli_xabar'))
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const modalElement =
      document.getElementById('form_1');

    const modal =
      bootstrap.Modal.getOrCreateInstance(modalElement);

    modal.show();
  });
</script>
@endif

@if(session('muvaffaqiyotli_baho'))
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const modalElement =
      document.getElementById('form_2');

    const modal =
      bootstrap.Modal.getOrCreateInstance(modalElement);

    modal.show();
  });
</script>
@endif






@endsection