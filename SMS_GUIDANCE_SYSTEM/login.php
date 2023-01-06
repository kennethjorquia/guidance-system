
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="/main.css" />

    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <title>Document</title>
  </head>
  <body>
    <div class="loginContainer">
      <div class="d-lg-flex position-relative">
        <div class="d-flex logoContainer">
          <div class="polygon1 position-relative">
            <img class="logo" src="images/newLogin/logo.png" alt="bcp-logo" />
          </div>
          <div class="polygon2"></div>
        </div>
        <div
          class="form-container d-flex justify-content-center w-100 p-3 p-lg-5"
        >
          <div class="m-auto">
            <div class="form-header1 ps-2 mb-5">
              <h1 class="header1 fw-bold fs-1 m-0">BCP</h1>
              <h1 class="header2 fw-bold fs-1 m-0">LEARNING MANAGEMENT</h1>
            </div>
            <form onSubmit="{SubmitHandler}">
              <label htmlFor="dropdown" class="fw-semibold fs-6 mb-2">
                Dashboard
              </label>
              <div id="dropdown" class="dropdown">
                <button
                  class="dropdownMenu px-3 fw-normal btn dropdown-toggle w-100 d-flex justify-content-between align-items-center dropDownBorder"
                  type="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Student
                </button>
                <ul class="dropdown-menu w-100">
                  <li>
                    <button value="Student" type="button" class="dropdown-item">
                      Student
                    </button>
                  </li>
                  <li>
                    <button value="Teacher" type="button" class="dropdown-item">
                      Teacher
                    </button>
                  </li>
                  <li>
                    <button value="Admin" type="button" class="dropdown-item">
                      Admin
                    </button>
                  </li>
                  <li>
                    <button
                      value="CourseDeveloper"
                      type="button"
                      class="dropdown-item"
                    >
                      Course Developer
                    </button>
                  </li>
                </ul>
              </div>

              <span class="loginLineBreak my-4"></span>
                                                                                                           <!-- USERNAME-->
              <div class="mb-3">
                <label
                  htmlFor="exampleInputEmail1"
                  class="form-label fw-semibold fs-6"
                >
                  Email
                </label>
                <input
                  type="email"
                  class="inputField input-form form-control px-3 fs-6 fw-normal"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                />
              </div>
                                                                                                           <!-- PASSWORD -->
              <div class="mb-3">
                <label
                  htmlFor="inputPassword"
                  class="form-label fw-semibold fs-6"
                >
                  Password
                </label>
                <div id="login">
                  <div class="passwordContainer">
                    <input
                      type="password"
                      class="inputField input-form form-control px-3 fs-6 fw-normal"
                      id="inputPassword"
                      name="password"
                    />
                    <i class="fa-solid fa-eye-slash" id="passwordIconId"></i>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <p class="errorInput">*insert error message</p>
              </div>
                                                                                                           <!-- BUTTON -->
              <button
                type="submit"
                class="buttonTemplate sumbit-button btn rounded-2 w-100 mt-3"
              >
                Log in
                <!-- <i class="bx bx-log-in"></i> -->
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script>
      let showPassword = document.querySelector("#passwordIconId");
      const passwordField = document.querySelector("#inputPassword");

      showPassword.addEventListener("click", function () {
        this.classList.toggle("fa-eye");

        const type =
          passwordField.getAttribute("type") === "password"
            ? "text"
            : "password";
        passwordField.setAttribute("type", type);
      });
    </script>
  </body>
</html>
