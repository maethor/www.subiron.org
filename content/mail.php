---
extends:
---

<?
if($_POST['message'] != "" && $_POST['mail'] != "") {
    if(mail("maethor+contact@subiron.org",
        "Contact www.subiron.org"
        "Name: " . $_POST['name'] . "\n" .
        "Company: " . $_POST['company'] . "\n" .
        "Phone: " . $_POST['phone'] . "\n" .
        "Message:\n" . $_POST['message'],
        "From: " . $_POST['Name'] . " <" . $_POST['mail'] . ">")) {
            echo "OK";
        }
}
?>

