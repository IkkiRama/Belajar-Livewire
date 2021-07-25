<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Livewire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/0.0.0-5a9c68d/tailwind.min.css" integrity="sha512-XgPcoW5S5ESFTO59Iy12VrhVngtzvQiLUKgp4JG3h1NVLPbdcNBNKELTswD/zDt4MEo98e7f16D/S07Arix11g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>
<body>
    {{$slot}}
    @livewireScripts

    <script>
        window.livewire.on('studentAdded',()=> {
            $('#addSiswaModal').modal('hide');
        })

        window.livewire.on('studentUpdate',()=> {
            $('#updateSiswaModal').modal('hide');
        })


        window.livewire.on('uploadAdded',()=> {
            $('#addUploadModal').modal('hide');
        })
    </script>
</body>
</html>
