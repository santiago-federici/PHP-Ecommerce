<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
</head>

<body>
  <header class='page-header'>
    <div class='header-wrapper'>
      <img class='logo'
        src="https://imgs.search.brave.com/Y2amAtUn2KuQmNcdLCmoFPg0LbYsgFBghjPg97Fv5Lg/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9sb2dv/LmNvbS9pbWFnZS1j/ZG4vaW1hZ2VzL2t0/czkyOHBkL3Byb2R1/Y3Rpb24vMDA4OWI3/YWUxZWQzOTRmMDQx/YzVmNzkyOWUxMTFj/MTFlOGVhZmU0ZC00/MjR4NDIxLnBuZz93/PTEwODAmcT03Mg"
        alt="Logo">

      <nav class='header-nav'>
        <a href="./home.php">
          Home
        </a>
        <a href="./products.php">
          Products
        </a>
        <a href="">
          About
        </a>
      </nav>
      <div class="form-btns-container">
        <a href="./form/loginForm.php"><button class='secondary-btn'>Login</button></a>
        <a href="./form/registerForm.php"><button class='primary-btn'>Register</button></a>
      </div>

      <div class='user-container'>

        <label for='user-options'>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-square-rounded" width="35" height="35" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z"></path>
            <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"></path>
            <path d="M6 20.05v-.05a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v.05"></path>
          </svg>
        </label>

        <input type="checkbox" hidden id='user-options'>

        <div class='options-container'>
          <h3>Username</h3>
          <ul>
            <li>Your account</li>
            <li>History</li>
            <li>Logout</li>
          </ul>
        </div>
      </div>

    </div>
  </header>

  <main class="wrapper">

    <section class='hero-section'>
      <div class='hero-info'>
        <h1>ECOMMERCE</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet perferendis animi natus fugiat aliquid quo obcaecati dolore, ut, architecto, sit maxime fuga rerum corporis ea!</p>
      </div>

      <img 
        src="./images/computer.jpeg" 
        alt=""
        class='hero-img'>
    </section>



    <section class='users-container'>
      <article class='user-card'>
        <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="" class='user-img'>
        <div class='user-info'>
          <h3 class='user-info__name'>Santiago Federici</h3>
          <p class='user-info__description'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, deleniti.</p>
          
          <!-- Stars -->
          <div class='stars-container'>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
            </svg>
          </div>
        </div>
      </article>

      <article class='user-card'>
        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="" class='user-img'>
        <div class='user-info'>
          <h3 class='user-info__name'>Santiago Federici</h3>
          <p class='user-info__description'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, deleniti.</p>
          
          <!-- Stars -->
          <div class='stars-container'>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
            </svg>
          </div>
        </div>
      </article>
      
      <article class='user-card'>
        <img src="https://randomuser.me/api/portraits/men/93.jpg" alt="" class='user-img'>
        <div class='user-info'>
          <h3 class='user-info__name'>Santiago Federici</h3>
          <p class='user-info__description'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, deleniti.</p>
          
          <!-- Stars -->
          <div class='stars-container'>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
            </svg>
          </div>
        </div>
      </article>


    </section>

    <section class='charts-container'>
        <article class='chart-card'>
            <img src="./images/chartOne.png" alt="">
            <div class='chart-info'>
                <h3>Lorem, ipsum dolor sit </h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse modi maxime, hic qui voluptate neque totam voluptates repellat sint rerum, non assumenda voluptatum provident natus.</p>
            </div>
        </article>
        <article class='chart-card'>
            <div class='chart-info'>
                <h3>Lorem, ipsum dolor sit </h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse modi maxime, hic qui voluptate neque totam voluptates repellat sint rerum, non assumenda voluptatum provident natus.</p>
            </div>
            <img src="./images/chartTwo.png" alt="">
        </article>
    </section>
  </main>

    <footer>
    </footer>
</body>

<script src="./cookieUserValidation.js"></script>
</html>