<!doctype html>
<html lang="en">

<l>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet">
  <link rel="icon" href="img/mytodolist-logo.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <!-- SIDEBAR -->
    <div class="sidebar">
      <div class="logo"></div>
      <div class="navigations">
        <ul>
          <li>
            <div class="my-tasks"><i class="fa-solid fa-house"></i>My Tasks</div>
          </li>
          <li>
            <div class="important"><i class="fa-regular fa-star"></i>Important</div>
          </li>
        </ul>
      </div>
    </div>

    <!-- TASKS CONTAINER -->
    <div class="main-content">
      <div class="top">
        <h1>My Tasks</h1>
        <button class="btn btn-primary add-task"><i class="fa-solid fa-plus"></i> Add a task</button>
      </div>
      <div class="task-container">
        <ul class="task-list">
          <li class="task-item">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Wash the dishes
              </label>
            </div>
            <div class="action-buttons">
              <ul>
                <li>
                  <div class="prioritize"><i class="fa-regular fa-star"></i></div>
                </li>
                <li>
                  <div class="edit"><i class="fa-solid fa-pen-to-square"></i></div>
                </li>
                <li>
                  <div class="delete"><i class="fa-solid fa-trash"></i></div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="container-fluid">
      <h1 class="display-1">HELLO, WORLD!</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/49a3347974.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>

</html>