$input = "input_string";

// Contoh penggunaan regex untuk memeriksa alamat IP
if (preg_match($regex_ip, $input)) {
echo "Alamat IP valid!";
} else {
echo "Alamat IP tidak valid!";
}

// Contoh penggunaan regex untuk memeriksa URL
if (preg_match($regex_url, $input)) {
echo "URL valid!";
} else {
echo "URL tidak valid!";
}

// Contoh penggunaan regex untuk username
if (preg_match($regex_username, $input)) {
echo "Username valid!";
} else {
echo "Username tidak valid!";
}

// Contoh penggunaan regex untuk email
if (preg_match($regex_email, $input)) {
echo "Email valid!";
} else {
echo "Email tidak valid!";
}


<!-- qword regex untuk forti-->
<!--  mencocokan alamat ip -->
<!-- $regex_ip='/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/'; -->

<!-- mencocokan url -->
<!-- $regex_url = '/\b(https?:\/\/[^\s]+)/i'; -->

<!-- mencocokan username password -->
<!-- $regex_username = '/^[a-zA-Z0-9_]{3,16}$/'; -->


<!-- mencocokan email -->
<!-- $regex_email = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/'; -->