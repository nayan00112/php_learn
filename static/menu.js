

function menubut() {
    let a = ```
<a href="A01_basic.html">A01_basic.html</a><br>
<a href="calc.php">calc.php</a><br>
<a href="index.html">index.html</a><br>
<a href="ok.html">ok.html</a><br>
<a href="test.html">test.html</a><br>
<a href="WP01_Welcome.php">WP01_Welcome.php</a><br>
<a href="WP02_variables.php">WP02_variables.php</a><br>
<a href="WP03_operator.php">WP03_operator.php</a><br>
<a href="WP04_controlStructure.php">WP04_controlStructure.php</a><br>
<a href="WP05_function.php">WP05_function.php</a><br>
<a href="WP06_array.php">WP06_array.php</a><br>
<a href="WP07_supergloble.php">WP07_supergloble.php</a><br>
<a href="WP08_GET_FORM.html">WP08_GET_FORM.html</a><br>
<a href="WP09_GET_FORM_DATA.php">WP09_GET_FORM_DATA.php</a><br>
<a href="WP10_POST_FORM.html">WP10_POST_FORM.html</a><br>
<a href="WP11_POST_FORM_DATA.php">WP11_POST_FORM_DATA.php</a><br>```
    let s = 0;
    if (s == 0) {
        document.getElementById("but_menu").innerHTML = "nayan";
        s = 1;
    }
    else {
        s = 0;
        document.getElementById("but_menu").innerHTML = "pate;";
    }
}