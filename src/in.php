
<?php
phpinfo(); // แสดงข้อมูล PHP info
// echo "Hello from Docker PHP!";
?>
<?php 
    //define('BASE_URL', 'https://ohmtool.com/'); 
    //define('BASE_URL', 'http://localhost/Git/Pasit/RQ00002/'); 
    define('BASE_URL', 'http://localhost/'); 
    define('SECURE_ACCESS', true);
?>

<?php
$pageConfig = [
    "title" => "pasit workshop",
    "description" => "Dev mode in thailand",
    "keywords" => "Just use my work to your space",
    "canonical" => "https://webdevohm.com/custom",
    "og_image" => "https://webdevohm.com/asset/img/Normal/custom.webp",
    "og_url" => "https://webdevohm.com/custom",
    "og_type" => "website"
];
?>
<?php include(__DIR__ . '/component/header.php'); ?>
<link rel="stylesheet" href="<?= BASE_URL ?>asset/css/styles_main.css">
  <main>
        <section>
            <div class="home-coming">
                <h1>list<i class="ri-earth-fill"></i> To do to day <i class="ri-code-box-fill"></i></h1>
            </div> 
            <div class="table">
                <table>
                    <caption>Just do it</caption>
                    <tr>
                        <th>First name:</th>
                        <th>Last name:</th>
                        <th>day/month/years:</th>
                        <th>context</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                </table><br>
            </div>
            <div class="add">
                <button>add ++</button>
            </div>
        </section>
    </main>
<?php include(__DIR__ . '/component/footer.php'); ?>