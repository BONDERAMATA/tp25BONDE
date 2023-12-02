<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header>
    <?php include("menu.php") ?>


    
        <!-- <li><a href="ACCUEIL.php" class="nav-links">ACCUEIL</a></li>
        <li> <a href="demande.php" class="nav-links">DEMANDE</a></li>
        <li> <a href="BLOG.php" class="nav-links">BLOG</a></li>
        <li> <a href="CONTACT.php" class="nav-links">CONTACT</a></li> -->
     
       <!-- <button>entre</button> -->
     </header> <br><br><br> <br><br><br>
     <section class="container" >
     <section>
     <h1 class="some">Demande de devis</h1>
     <p>Vous avez un projet de nettoyage nécessitant un professionnel ? Laissez-nous votre demande ci-dessous et nous vous mettons en contact avec un spécialiste du nettoyage et de l’hygiène proche de chez vous.</p>
     </section><br>
     <section>
        <div class="row g-2">
            <div class="col-md">
              <div class="form-floating">
                <samp class="est">surface *</samp>
                <input type="email" class="form-control" id="floatingI<label for="floatingInputGrid"></label>
              </div>
            </div>
            <div class="col-md">
                <label for="floatingSelectGrid"> <samp class="est">Type de bâtiment*</samp></label>
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid">
                  <option selected>Apartement</option>
                  
                  <option value="1"><samp class="est">Maison</samp></option>
                  <option value="2"><samp class="est">Autre</samp></option>
                </select>
               
               
               
               
              </div>
            </div>
          </div><br>
          <div class="row ">
            <div class="col-md">
              <div class="form-floating">
                <samp class="est">detail*</samp>
                <input type="email" class="form-control"></label>
              </div>
            </div><br><br>
            
            
            
            
          <div class="row g-2">
            <div class="col-md">
              <div class="form-floating">
                <samp class="est">nom *</samp>
                <input type="email" class="form-control" id="floatingI<label for="floatingInputGrid"></label>
              </div>
            </div>
            <div class="col-md">
                <label for="floatingSelectGrid"><samp class="est">prenom *</samp></label>
              <div class="form-floating">
                <select class="form-select">
                
                </select>
               
              </div>
            </div>
          </div><br><br>
          <div class="row g-2">
            <div class="col-md">
              <div class="form-floating">
                <samp class="est">Email *</samp>
                <input type="email" class="form-control" id="floatingI<label for="floatingInputGrid"></label>
              </div>
            </div>
            <div class="col-md">
                <label for="floatingSelectGrid"><samp class="est">Telephone *</samp></label>
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid">
                  
                </select>
               
              </div>
            </div>
          </div>
          
     
     </section>
     
     
     
     
     
     
     </section><br><br><br>
     <!-- <footer >
        <div class="dia">
            <h4 class="h4">Organisation internationale de la Francophonie</h4>
            <h4 class="h4">19-21 avenue Bosquet • 75007 Paris (France)</h4>
            <h4 class="h4">Téléphone (33) 1 44 37 33 25</h4>
            <h4 class="h4">Télécopie (33) 1 45 79 14 98</h4>
        
        
        <img class="rama" src="logo-1-250x0-c-default.png" alt="">
        <i class="bi bi-facebook"></i>
            </footer>
             -->
             <?php include("footer.php"); ?> 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>