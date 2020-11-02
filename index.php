<!-- https://video.search.yahoo.com/yhs/search;_ylt=AwrUiqpgKJ9fdGoA1AAPxQt.;_ylu=Y29sbwNncTEEcG9zAzEEdnRpZAMEc2VjA3BpdnM-?p=mySQL&type=gsp_dimensions_00_00_--x1-84-x2-2--_ag27748&param1=1&param2=cat%3Dweb%26sesid%3D7a54af2f9dbd87b2f233a8e7bc3c72cc%26ip%3D2600%3A6c54%3A7a00%3A2e92%3Aeda8%3A25f1%3Ac977%3A7e4a%26b%3DChrome%26bv%3D86.0.4240.111%26os%3DmacOS-10.14-Mojave%26os_ver%3D10.14%26pa%3Dgencoll05%26sid%3D69642e35ed98c0fe4b7125ed98b47740%26abid%3D23141%26abg%3D27748%26a%3Dgsp_dimensions_00_00_--x1-84-x2-2--_ag27748%26sdk_ver%3D%26cd%3D%26cr%3D%26uid%3D%26uref%3D&hsimp=yhs-005&hspart=dcola&ei=UTF-8&fr=yhs-dcola-005&guce_referrer=aHR0cHM6Ly9zZWFyY2gueWFob28uY29tL3locy9zZWFyY2g_aHNwYXJ0PWRjb2xhJmhzaW1wPXlocy0wMDUmdHlwZT1nc3BfZGltZW5zaW9uc18wMF8wMF8tLXgxLTg0LXgyLTItLV9hZzI3NzQ4JnBhcmFtMT0xJnBhcmFtMj1jYXQlM0R3ZWIlMjZzZXNpZCUzRDdhNTRhZjJmOWRiZDg3YjJmMjMzYThlN2JjM2M3MmNjJTI2aXAlM0QyNjAwJTNBNmM1NCUzQTdhMDAlM0EyZTkyJTNBZWRhOCUzQTI1ZjElM0FjOTc3JTNBN2U0YSUyNmIlM0RDaHJvbWUlMjZidiUzRDg2LjAuNDI0MC4xMTElMjZvcyUzRG1hY09TLTEwLjE0LU1vamF2ZSUyNm9zX3ZlciUzRDEwLjE0JTI2cGElM0RnZW5jb2xsMDUlMjZzaWQlM0Q2OTY0MmUzNWVkOThjMGZlNGI3MTI1ZWQ5OGI0Nzc0MCUyNmFiaWQlM0QyMzE0MSUyNmFiZyUzRDI3NzQ4JTI2YSUzRGdzcF9kaW1lbnNpb25zXzAwXzAwXy0teDEtODQteDItMi0tX2FnMjc3NDglMjZzZGtfdmVyJTNEJTI2Y2QlM0QlMjZjciUzRCUyNnVpZCUzRCUyNnVyZWYlM0QmcD1teVNRTA&guce_referrer_sig=AQAAAEmDinBr0enYFTIVnxqhh9mAtwc9ZZvGIEWUY_He0SBQS7Vrn-hAKf8ElBKviFEXHL1cB-vosRii9six3ebrXtJfIYDz95rs-DpB_JOuUgVJ967ggbwAozon3alESkbeLisloJT5sLjzqjIwNMYwZt-CmqxJd-sBytSCMVmaKYxU&_guc_consent_skip=1604272713#action=view&id=20&vid=6119fbcfd1318272866f86c5603d8530 -->
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name" />
        <br>
        <label>User Name</label>
        <input type="password" name="uname" placeholder="Password" />
        <br>
        <button type="submit">Log In</button>
    </form>
</body>
</html>