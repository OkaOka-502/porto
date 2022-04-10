<?php
if ($_GET['lokasi'] == NULL || $_GET['lokasi'] == '' || $_GET['lokasi'] == "profile" ) {
    include("views/admin/profile/profile.php");
}
    else if ($_GET['lokasi'] == "about"){
    include("views/admin/about/about.php");
}
    else if ($_GET['lokasi'] == "editu"){
    include("views/admin/about/editu.php");
}
    else if ($_GET['lokasi'] == "editb"){
    include("views/admin/about/editb.php");
}
    else if ($_GET['lokasi'] == "project"){
    include("views/admin/project/project.php");
}
    else if ($_GET['lokasi'] == "tambah"){
    include("views/admin/project/tambah.php");
}
    else if ($_GET['lokasi'] == "ubah"){
    include("views/admin/project/ubah.php");
}
    else if ($_GET['lokasi'] == "hapus"){
    include("views/admin/project/hapus.php");
}
    else if ($_GET['lokasi'] == "contact"){
    include("views/admin/contact/contact.php");
}
    else if ($_GET['lokasi'] == "logout"){
    session_destroy();
    echo "
        <script>
        alert('See You :)')
        window.location.href='http://localhost:8080/portofolio_cici/'
        </script>
    ";
}

?>