<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="./static/css/style.css" />
  <title>E-commerce | Products</title>
</head>
<body>

</body>
</html>
  <nav>
    <div class="heading"> 
      <h2>Products</h2>
        <span>Ecommerce / Products</span>
    </div>
    <div>
      <button class="import"><i class="bi bi-download"></i> Import</button><button class="filter"><i
              class="bi bi-funnel"></i> Filter</button><button class="download-report">
          <i class="bi bi-cloud-download"> </i> Download Report
      </button>
    </div>
  </nav>
  <div class="card-container">
        <div class="card">
          <img src="./static/image/boy-tshirt.jpg" alt="" />
            <p><?php echo "Boy  T-Shirt" ?></p>
              <p><?php echo "$30" ?></p>
        </div>
        <div class="card">
          <img src="./static/image/girl-dress.jpg" alt="" />
            <p><?php echo "Girl Dress" ?></p>
              <p><?php echo "$50" ?></p>
        </div>
        <div class="card">
          <img src="./static/image/boy-tshirt.jpg" alt="" />
            <p><?php echo "Boy  T-Shirt" ?></p>
              <p><?php echo "$30" ?></p>
        </div>
  </div>

  <div class="right-menu">
    <div class="search-box">
      <input type="text" placeholder="Search ..." /> <button>Search</button>
    </div>
  </div>


  


<!-- <?php 
// require './vendor/autoload.php';
// use Symfony\Component\Yaml\Yaml;
// // use vendor\symfony\Component\Yaml\Parser;
// // use vendor\symfony\Component\Yaml\Dumper;
// $value = Yaml::parseFile('file1.yml');
// // var_dump($value);
// print_r($value);
// //echo Yaml::dump($value,2,3, Yaml::DUMP_OBJECT);

//?> 
 -->
