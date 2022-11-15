<?php include('nav.php') ?>

<div style="height:600px" class="container">
    <h1 style="margin-top:25px; text-align: center;">Welcome to Our Bank</h1>
    <hr>
    <div style="white-space:nowrap;">
    <img src="img/3041.jpg" style="height:100px;" alt="">
    <img src="img/3041.jpg" style="height:100px;" alt="">
    <img src="img/3041.jpg" style="height:100px;" alt="">
    <img src="img/3041.jpg" style="height:100px;" alt="">
    <img src="img/3041.jpg" style="height:100px;" alt=""> 
    </div>
    <br>
    <br>
    <div class="row">
      <div class="col">
        <div style="width:300px;" class="p-5 sm:w-96 w-full flex flex-col justify-start items-center blue-glassmorphism" >
            <h5 style="text-align: center;">Users</h5><hr>
            <a href="transfer_money.php" style="background-color:#0b1324; border-radius: 20px;"><button class="btn btn-outline-light text-white w-full mt-2 border-[1px] p-2 border-[#3d4f7c] hover:bg-[#3d4f7c] rounded-full cursor-pointer" id="red">View </button></a>
            <!-- <a href="transfer_money.php" style="background-color:#0b1324;" class="btn btn-outline-light text-white w-full mt-2 border-[1px] p-2 border-[#3d4f7c] hover:bg-[#3d4f7c] rounded-full cursor-pointer">View</a>             -->
        </div>
      </div>
      <div class="col">
        <div style="width:300px;" class="p-5 sm:w-96 w-full flex flex-col justify-start items-center blue-glassmorphism" >
            <h5 style="text-align: center;">Money Transfer</h5><hr>
            <a href="transfer_money.php"  style="background-color:#0b1324; border-radius: 20px;"><button class="btn btn-outline-light text-white w-full mt-2 border-[1px] p-2 border-[#3d4f7c] hover:bg-[#3d4f7c] rounded-full cursor-pointer" id="blue">View</button></a>
        </div>
      </div>
      <div class="col">
        <div style="width:300px;" class="p-5 sm:w-96 w-full flex flex-col justify-start items-center blue-glassmorphism" >
            <h5 style="text-align: center;">Transfer History</h5><hr>
            <a href="transactionhistory.php" style="background-color:#0b1324; border-radius: 20px;"><button class="btn btn-outline-light text-white w-full mt-2 border-[1px] p-2 border-[#3d4f7c] hover:bg-[#3d4f7c] rounded-full cursor-pointer" id="green">View</button></a>
        </div>
      </div>
  </div>
  <?php include('footer.php') ?>
  <br>
</body>
</html>