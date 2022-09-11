<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Primary Meta Tags -->
    <title>Oracus Web Project</title>
    <meta name="title" content="Oracus Web Project" />
    <meta name="description" content="Team/Staff management Portal" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta
      property="og:url"
      content="https://oracus-digital-agency.github.io/Front-End-Html/"
    />
    <meta property="og:title" content="Oracus Web Project" />
    <meta property="og:description" content="Team/Staff management Portal" />
    <meta property="og:image" content="./assets/imgs/logo/mobilelogo.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta
      property="twitter:url"
      content="https://oracus-digital-agency.github.io/Front-End-Html/"
    />
    <meta property="twitter:title" content="Oracus Web Project" />
    <meta
      property="twitter:description"
      content="Team/Staff management Portal"
    />
    <meta property="twitter:image" content="" />
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/main.css" />
    <link rel="stylesheet" href="./assets/forgotpsd.css" />
    <link rel="stylesheet" href="./assets/faicon/css/all.min.css" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
          inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -0.125em;
        fill: #fff;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
      <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path
          d="M7.99997 2C6.8065 2 5.66191 2.47411 4.81799 3.31802C3.97408 4.16193 3.49997 5.30653 3.49997 6.5V8.901L2.53597 11.315C2.50578 11.3908 2.4946 11.4729 2.50341 11.554C2.51222 11.6351 2.54076 11.7128 2.58652 11.7804C2.63228 11.848 2.69389 11.9033 2.76596 11.9416C2.83803 11.9799 2.91837 11.9999 2.99997 12H13C13.0816 11.9999 13.1619 11.9799 13.234 11.9416C13.3061 11.9033 13.3677 11.848 13.4134 11.7804C13.4592 11.7128 13.4877 11.6351 13.4965 11.554C13.5053 11.4729 13.4942 11.3908 13.464 11.315L12.5 8.9V6.5C12.5 5.30653 12.0259 4.16193 11.182 3.31802C10.338 2.47411 9.19345 2 7.99997 2ZM7.99997 14.5C7.55649 14.5001 7.12556 14.3528 6.77492 14.0813C6.42428 13.8098 6.17384 13.4294 6.06297 13H9.93697C9.8261 13.4294 9.57566 13.8098 9.22502 14.0813C8.87439 14.3528 8.44345 14.5001 7.99997 14.5Z"
        />
      </symbol>
      <symbol id="login" viewBox="0 0 16 16">
        <path
          d="M7.33333 10.6666L4.66667 7.99996M4.66667 7.99996L7.33333 5.33329M4.66667 7.99996H14M10.6667 10.6666V11.3333C10.6667 11.8637 10.456 12.3724 10.0809 12.7475C9.70581 13.1226 9.1971 13.3333 8.66667 13.3333H4C3.46957 13.3333 2.96086 13.1226 2.58579 12.7475C2.21071 12.3724 2 11.8637 2 11.3333V4.66663C2 4.13619 2.21071 3.62749 2.58579 3.25241C2.96086 2.87734 3.46957 2.66663 4 2.66663H8.66667C9.1971 2.66663 9.70581 2.87734 10.0809 3.25241C10.456 3.62749 10.6667 4.13619 10.6667 4.66663V5.33329"
          stroke="#B9C0FE"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </symbol>
      <symbol id="registration" viewBox="0 0 16 16">
        <path
          opacity="0.9"
          d="M5.50187 14.1985C5.50219 14.395 5.56031 14.5875 5.66937 14.7513L6.20344 15.5541C6.29467 15.6913 6.41841 15.8039 6.56366 15.8817C6.7089 15.9596 6.87114 16.0003 7.03594 16.0003H8.96438C9.12917 16.0003 9.29141 15.9596 9.43665 15.8817C9.5819 15.8039 9.70564 15.6913 9.79688 15.5541L10.3309 14.7513C10.44 14.5875 10.4982 14.3952 10.4984 14.1985L10.4997 13H5.50031L5.50187 14.1985ZM2.5 5.50003C2.5 6.88659 3.01406 8.15159 3.86125 9.11815C4.3775 9.70721 5.185 10.9378 5.49281 11.976C5.49406 11.9841 5.495 11.9922 5.49625 12.0003H10.5037C10.505 11.9922 10.5059 11.9844 10.5072 11.976C10.815 10.9378 11.6225 9.70721 12.1388 9.11815C12.9859 8.15159 13.5 6.88659 13.5 5.50003C13.5 2.45659 11.0284 -0.00934836 7.98281 2.66431e-05C4.795 0.00971414 2.5 2.59284 2.5 5.50003ZM8 3.00003C6.62156 3.00003 5.5 4.12159 5.5 5.50003C5.5 5.77628 5.27625 6.00003 5 6.00003C4.72375 6.00003 4.5 5.77628 4.5 5.50003C4.5 3.57003 6.07 2.00003 8 2.00003C8.27625 2.00003 8.5 2.22378 8.5 2.50003C8.5 2.77628 8.27625 3.00003 8 3.00003Z"
          fill="#fff"
        />
      </symbol>
      <symbol id="email" viewBox="0 0 16 16">
        <path
          opacity="0.8"
          d="M2.4 7.20002C3.2825 7.20002 4 6.48252 4 5.60002C4 4.71752 3.2825 4.00002 2.4 4.00002C1.5175 4.00002 0.8 4.71752 0.8 5.60002C0.8 6.48252 1.5175 7.20002 2.4 7.20002ZM13.6 7.20002C14.4825 7.20002 15.2 6.48252 15.2 5.60002C15.2 4.71752 14.4825 4.00002 13.6 4.00002C12.7175 4.00002 12 4.71752 12 5.60002C12 6.48252 12.7175 7.20002 13.6 7.20002ZM14.4 8.00002H12.8C12.36 8.00002 11.9625 8.17753 11.6725 8.46502C12.68 9.01753 13.395 10.015 13.55 11.2H15.2C15.6425 11.2 16 10.8425 16 10.4V9.60003C16 8.71753 15.2825 8.00002 14.4 8.00002ZM8 8.00002C9.5475 8.00002 10.8 6.74752 10.8 5.20002C10.8 3.65252 9.5475 2.40002 8 2.40002C6.4525 2.40002 5.2 3.65252 5.2 5.20002C5.2 6.74752 6.4525 8.00002 8 8.00002ZM9.92 8.80002H9.7125C9.1925 9.05002 8.615 9.20003 8 9.20003C7.385 9.20003 6.81 9.05002 6.2875 8.80002H6.08C4.49 8.80002 3.2 10.09 3.2 11.68V12.4C3.2 13.0625 3.7375 13.6 4.4 13.6H11.6C12.2625 13.6 12.8 13.0625 12.8 12.4V11.68C12.8 10.09 11.51 8.80002 9.92 8.80002ZM4.3275 8.46502C4.0375 8.17753 3.64 8.00002 3.2 8.00002H1.6C0.7175 8.00002 0 8.71753 0 9.60003V10.4C0 10.8425 0.3575 11.2 0.8 11.2H2.4475C2.605 10.015 3.32 9.01753 4.3275 8.46502Z"
          fill="#fff"
        />
      </symbol>
      <symbol id="forms" viewBox="0 0 16 16">
        <path
          opacity="0.8"
          d="M8 8C10.2094 8 12 6.20937 12 4C12 1.79063 10.2094 0 8 0C5.79063 0 4 1.79063 4 4C4 6.20937 5.79063 8 8 8ZM10.9937 9.01875L9.5 15L8.5 10.75L9.5 9H6.5L7.5 10.75L6.5 15L5.00625 9.01875C2.77812 9.125 1 10.9469 1 13.2V14.5C1 15.3281 1.67188 16 2.5 16H13.5C14.3281 16 15 15.3281 15 14.5V13.2C15 10.9469 13.2219 9.125 10.9937 9.01875Z"
          fill="#fff"
        />
      </symbol>
      <symbol id="notifications" viewBox="0 0 16 16">
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M10.0894 2.62369C9.94559 2.32421 9.7201 2.07146 9.4389 1.89455C9.1577 1.71764 8.83224 1.62378 8.50003 1.62378C8.16781 1.62378 7.84235 1.71764 7.56115 1.89455C7.27996 2.07146 7.05446 2.32421 6.91065 2.62369L1.83815 12.6018C1.23128 13.7931 1.99815 15.3749 3.4269 15.3749H13.5725C15.0019 15.3749 15.7675 13.7937 15.1619 12.6018L10.0894 2.62369ZM8.50003 5.99994C8.66579 5.99994 8.82476 6.06579 8.94197 6.183C9.05918 6.30021 9.12503 6.45918 9.12503 6.62494V9.74994C9.12503 9.9157 9.05918 10.0747 8.94197 10.1919C8.82476 10.3091 8.66579 10.3749 8.50003 10.3749C8.33427 10.3749 8.1753 10.3091 8.05809 10.1919C7.94088 10.0747 7.87503 9.9157 7.87503 9.74994V6.62494C7.87503 6.45918 7.94088 6.30021 8.05809 6.183C8.1753 6.06579 8.33427 5.99994 8.50003 5.99994ZM8.50003 11.3124C8.66579 11.3124 8.82476 11.3783 8.94197 11.4955C9.05918 11.6127 9.12503 11.7717 9.12503 11.9374V12.2499C9.12503 12.4157 9.05918 12.5747 8.94197 12.6919C8.82476 12.8091 8.66579 12.8749 8.50003 12.8749C8.33427 12.8749 8.1753 12.8091 8.05809 12.6919C7.94088 12.5747 7.87503 12.4157 7.87503 12.2499V11.9374C7.87503 11.7717 7.94088 11.6127 8.05809 11.4955C8.1753 11.3783 8.33427 11.3124 8.50003 11.3124Z"
          fill="#fff"
        />
      </symbol>
      <symbol id="alerts" viewBox="0 0 16 16">
        <path
          d="M7.99997 2C6.8065 2 5.66191 2.47411 4.81799 3.31802C3.97408 4.16193 3.49997 5.30653 3.49997 6.5V8.901L2.53597 11.315C2.50578 11.3908 2.4946 11.4729 2.50341 11.554C2.51222 11.6351 2.54076 11.7128 2.58652 11.7804C2.63228 11.848 2.69389 11.9033 2.76596 11.9416C2.83803 11.9799 2.91837 11.9999 2.99997 12H13C13.0816 11.9999 13.1619 11.9799 13.234 11.9416C13.3061 11.9033 13.3677 11.848 13.4134 11.7804C13.4592 11.7128 13.4877 11.6351 13.4965 11.554C13.5053 11.4729 13.4942 11.3908 13.464 11.315L12.5 8.9V6.5C12.5 5.30653 12.0259 4.16193 11.182 3.31802C10.338 2.47411 9.19345 2 7.99997 2ZM7.99997 14.5C7.55649 14.5001 7.12556 14.3528 6.77492 14.0813C6.42428 13.8098 6.17384 13.4294 6.06297 13H9.93697C9.8261 13.4294 9.57566 13.8098 9.22502 14.0813C8.87439 14.3528 8.44345 14.5001 7.99997 14.5Z"
          fill="#fff"
        />
      </symbol>
      <symbol id="calendar" viewBox="0 0 16 16">
        <path
          opacity="0.8"
          d="M13.75 6.25H1.25V11.875C1.25 12.3723 1.44754 12.8492 1.79917 13.2008C2.15081 13.5525 2.62772 13.75 3.125 13.75H11.875C12.3723 13.75 12.8492 13.5525 13.2008 13.2008C13.5525 12.8492 13.75 12.3723 13.75 11.875V6.25ZM4.375 5C4.20924 5 4.05027 4.93415 3.93306 4.81694C3.81585 4.69973 3.75 4.54076 3.75 4.375V1.875C3.75 1.70924 3.81585 1.55027 3.93306 1.43306C4.05027 1.31585 4.20924 1.25 4.375 1.25C4.54076 1.25 4.69973 1.31585 4.81694 1.43306C4.93415 1.55027 5 1.70924 5 1.875V4.375C5 4.54076 4.93415 4.69973 4.81694 4.81694C4.69973 4.93415 4.54076 5 4.375 5ZM10.625 5C10.4592 5 10.3003 4.93415 10.1831 4.81694C10.0658 4.69973 10 4.54076 10 4.375V1.875C10 1.70924 10.0658 1.55027 10.1831 1.43306C10.3003 1.31585 10.4592 1.25 10.625 1.25C10.7908 1.25 10.9497 1.31585 11.0669 1.43306C11.1842 1.55027 11.25 1.70924 11.25 1.875V4.375C11.25 4.54076 11.1842 4.69973 11.0669 4.81694C10.9497 4.93415 10.7908 5 10.625 5Z"
          fill="#fff"
        />
        <path
          d="M11.875 2.5H11.25V4.375C11.25 4.54076 11.1842 4.69973 11.0669 4.81694C10.9497 4.93415 10.7908 5 10.625 5C10.4592 5 10.3003 4.93415 10.1831 4.81694C10.0658 4.69973 10 4.54076 10 4.375V2.5H5V4.375C5 4.54076 4.93415 4.69973 4.81694 4.81694C4.69973 4.93415 4.54076 5 4.375 5C4.20924 5 4.05027 4.93415 3.93306 4.81694C3.81585 4.69973 3.75 4.54076 3.75 4.375V2.5H3.125C2.62772 2.5 2.15081 2.69754 1.79917 3.04917C1.44754 3.40081 1.25 3.87772 1.25 4.375V6.25H13.75V4.375C13.75 3.87772 13.5525 3.40081 13.2008 3.04917C12.8492 2.69754 12.3723 2.5 11.875 2.5Z"
          fill="#fff"
        />
      </symbol>
    </svg>

    <main class="d-flex flex-nowrap bg-light">
      <div
        class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark"
        style="width: 280px; height: 100vh; background: #0a0d51"
      >
        <a
          href="/"
          class="mb-3 mb-md-0 me-md-auto d-inline-block text-center text-white text-decoration-none"
        >
          <img src="./assets/imgs/logo/white.png" class="d-block" alt="" />
          <h3
            class="fs-4"
            style="
              font-size: 24px;
              font-weight: 500;
              display: block;
              color: #b9c0fe;
            "
          >
            Dashboard
          </h3>
        </a>
        <hr />
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link bg-white" aria-current="page">
              <svg class="bi pe-none me-2" width="16" height="16">
                <use xlink:href="#login" />
              </svg>
              Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16">
                <use xlink:href="#registration" />
              </svg>
              Registration
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16">
                <use xlink:href="#email" />
              </svg>
              Email
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16">
                <use xlink:href="#forms" />
              </svg>
              Forms
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16">
                <use xlink:href="#notifications" />
              </svg>
              Notifications
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16">
                <use xlink:href="#alerts" />
              </svg>
              Alerts
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16">
                <use xlink:href="#calendar" />
              </svg>
              Calendar
            </a>
          </li>
        </ul>
      </div>
      <section class="dashboard">
        <h2>DASHBOARD</h2>
      </section>
    </main>
    <script src="./assets/bootstrap/bootstrap.min.js"></script>
  </body>
</html>
