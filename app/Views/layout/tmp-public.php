<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="/favicon.ico" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>AlifmaDev | <?= $title; ?></title>
    <!-- Custom CSS -->
</head>

<body>
    <?= $this->include('layout/public-navbar'); ?>
    <div class="article container my-3">
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- Footer -->
    <!-- Footer -->
    <!-- Footer -->
    <footer class="page-footer">
        <hr>
        <!-- Copyright -->
        <footer class="main-footer text-center p-2">
            <p class="text-muted"> &copy; Copyright <a style="text-decoration: none;" class="text-muted" href="https://alifma.com">Alifma<span class="oren">Dev</span></a> - 2020
            </p>
        </footer>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script>
        function previewImg() {
            const sampul = document.querySelector('#sampul');
            const sampulLabel = document.querySelector('.form-file-text');
            const imgPreview = document.querySelector('.img-preview');
            // Ganti nama FIle
            sampulLabel.textContent = sampul.files[0].name;
            // Ganti Preview
            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);
            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>

</body>

</html>