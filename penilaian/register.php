
<!DOCTYPE html>
<html lang="en">
<head>  
<title>Login V2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="int" id="id" class="form-control form-control-lg" />
                    <label class="form-label" for="id">ID</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="int" id="nik" class="form-control form-control-lg" />
                    <label class="form-label" for="nik">NIK</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div data-mdb-input-init class="form-outline datepicker w-100">
                    <input type="varchar" class="form-control form-control-lg" id="nama" />
                    <label for="nama" class="form-label">Nama</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">jenis kelamin: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" checked />
                    <label class="form-check-label" for="femaleGender">perempuan</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">laki-laki</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="alamat" class="form-control form-control-lg" />
                    <label class="form-label" for="alamat">alamat</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div data-mdb-input-init class="form-outline">
                    <input type="varchar" id="no_tlp" class="form-control form-control-lg" />
                    <label class="form-label" for="no_tlp">Nomor telepon </label>
                  </div>

                </div>
              </div>
              <div class="col-md-6 mb-4 pb-2">

            <div data-mdb-input-init class="form-outline">
            <input type="int" id="jabatan" class="form-control form-control-lg" />
            <label class="form-label" for="jabatan">Jabatan</label>
            </div>

              <div class="mt-4 pt-2">
                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
.gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</body>

