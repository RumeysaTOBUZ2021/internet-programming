<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Hesap Makinesi</title>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
background-color: #2B4032;
    }

     header{
     font-size:35px;color:#8AA6A3;font-family:Lucida Calligraphy;
     padding:0 525px;
     margin: auto;
     width: max-content;
     max-width: 100%;
     margin: 70px;
     
     }

     .container{
     padding-top: 2em; 
     width: 100%;
     max-width: 650px;
     margin: 0 auto;
     }
     
     .container select{
            color:#F5F5F5;
            font-size: 12pt;
            font-weight: bold;
            padding: 8px 24px 8px 10px;
            border-color: black;
            background-color: #2B4032;
           }

    .submit {
    width: 600px;
    margin: 0 auto;
    text-align: center;
    }

    input[type="number"] {
    color: #F5F5F5;
    height: 58px;
    width: 200px;
    border-radius: 9px;
    border: 1px solid #b3b3b3;
    margin: 27px;
    text-align: center;
    font-size: 1.3em;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }

    input[type="submit"] {
    width: 5em;
    height: 3em;
    font-size: 20px;
    border-radius: 15px;
    background-color: #8AA6A3;
    color: #F5F5F5;
    border: none;
    cursor: pointer;
    margin:0px 275px;
    }

     input[type="submit"]:active{
            background-color: #10123d;
     }

      .sonuc{
            font-family: Lucida Calligraphy;
            font-size: 1.4em;
            color: #F5F5F5;
            background-color:#8AA6A3;
            width: max-content;
            padding: 10px 25px;
            border-radius: 10px;
            margin: 30px 598px;
      }

       select {
           font-size: 17px;
           width: 8.3em;
           height: 3em;
           box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
}
    </style>
</head>
<body >
    <header>4 ��lem</header>
    <div class="container">
    <form method="post" action="">
    <input type="number" name="sayi1" placeholder="1.Say�" required>
        <select name="islem">
        <option value="toplama">Toplama</option>
        <option value="cikarma">��karma</option>
        <option value="carpma">�arpma</option>
        <option value="bolme">B�lme</option>
        </select>
        <input type="number" name="sayi2" placeholder="2.Say�" required>
        <input type="submit" value="Hesapla" id="hesapla"/>
        </form>
    </div>
<?php
        if(isset($_POST['islem']))
       {
           $islem = $_POST['islem'];
        if(isset($_POST['sayi1']))
        {
            $sayi1 = $_POST['sayi1'];
        if(isset($_POST['sayi2']))
        {
            $sayi2 = $_POST['sayi2'];
        
        
        
        switch ($islem) 
       {
            case 'toplama':
                echo '<div class="sonuc">'.'Sonu�: '.($sayi1+$sayi2).'</div>';
                break;
            case 'cikarma':
                echo '<div class="sonuc">'.'Sonu�: '.($sayi1-$sayi2).'</div>';
                break;
    
            case 'carpma':
                echo '<div class="sonuc">'.'Sonu�: '.($sayi1*$sayi2).'</div>';
                break;
    
            case 'bolme':
                    echo '<div class="sonuc">'.'Sonu�: '.($sayi1/$sayi2).'</div>';
                break;
          }
          }
          }
          }
          
?>
</body>
</html>