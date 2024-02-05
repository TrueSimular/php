<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evil Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="py-4 text-bg-warning">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (light)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#sun-fill"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<main>
  <div class="container">

    <h1>Продукты 1С</h1>
    <p class="lead">Существует есть целое множество продуктов, которые может предложить вам компания 1С. Уверяем вас, что и целой жизни не хватит, чтобы разобраться сразу во всех.</p>

    <div class="row mb-3 text-center color-warning">
      <div class="col-4 themed-grid-col"><a href="http://v8.1c.ru/" style="color:red">1С:Предприятие 8</a></div>
      <div class="col-4 themed-grid-col"><a href="http://v8.1c.ru/buhv8/" style="color:red">1С:Бухгалтерия 8</a></div>
      <div class="col-4 themed-grid-col"><a href="http://v8.1c.ru/usn/" style="color:red" target="_blank">1С:Упрощенка 8</a></div>
    </div>

    <div class="row mb-3 text-center">
      <div class="col-sm-4 themed-grid-col"><a href="http://v8.1c.ru/pboul/" style="color:red" target="_blank">1С:Предприниматель 8</a></div>
      <div class="col-sm-4 themed-grid-col"><a href="http://v8.1c.ru/hrm/" style="color:red" target="_blank">1С:Зарплата и управление персоналом 8</a></div>
      <div class="col-sm-4 themed-grid-col"><a href="http://v8.1c.ru/trade/" style="color:red" target="_blank">1С:Управление торговлей 8</a></div>
    </div>

    <div class="row mb-3 text-center">
      <div class="col-md-4 themed-grid-col"><a href="http://v8.1c.ru/retail/" style="color:red" target="_blank">1С:Розница 8</a></div>
      <div class="col-md-4 themed-grid-col"><a href="http://v8.1c.ru/cpm/" style="color:red" target="_blank">1С:Управление Холдингом 8</a></div>
      <div class="col-md-4 themed-grid-col"><a href="http://v8.1c.ru/erp/" style="color:red" target="_blank">1C:ERP Управление предприятием 2.0</a></div>
    </div>
    
    <div class="row mb-3 text-center">
      <div class="col-md-4 themed-grid-col"><a href="http://v8.1c.ru/enterprise/" style="color:red" target="_blank">1С:Предприятие 8. Управление производственным предприятием</a></div>
      <div class="col-md-4 themed-grid-col"><a href="http://v8.1c.ru/ka/" style="color:red" target="_blank">1С:Комплексная автоматизация 8</a></div>
      <div class="col-md-4 themed-grid-col"><a href="http://v8.1c.ru/doc8/" style="color:red" target="_blank">1С:Документооборот 8</a></div>
    </div>

    <div class="row mb-3 text-center">
      <div class="col-6 col-md-4 themed-grid-col"><a href="http://v8.1c.ru/consolid/" style="color:red" target="_blank">1С:Консолидация 8</a></div>
      <div class="col-6 col-md-4 themed-grid-col"><a href="http://v8.1c.ru/small.biz/" style="color:red" target="_blank">1С:Управление нашей фирмой 8</a></div>
      <div class="col-6 col-md-4 themed-grid-col"><a href="http://v8.1c.ru/taxes/" style="color:red" target="_blank">1С:Налогоплательщик 8</a></div>
    </div>
    
    <div class="row mb-3 text-center">
      <div class="col-6 col-sm-4 themed-grid-col"><a href="http://v8.1c.ru/er/" style="color:red" target="_blank">1С:Отчетность предпринимателя 8</a></div>
      <div class="col-6 col-sm-4 themed-grid-col"><a href="http://www.v8.1c.ru/pd/" style="color:red" target="_blank">1С:Платежные документы 8</a></div>
      <div class="col-6 col-sm-4 themed-grid-col"><a href="http://v8.1c.ru/stateacc/" style="color:red" target="_blank">1С:Бухгалтерия государственного учреждения 8</a></div>
    </div>

    <div class="row mb-3 text-center">
      <div class="col-4 themed-grid-col"><a href="https://v8.1c.ru/clothing-allowance/" style="color:red" target="_blank">1С:Вещевое довольствие 8</a></div>
      <div class="col-4 themed-grid-col"><a href="http://v8.1c.ru/budghrm/" style="color:red" target="_blank">1С:Зарплата и кадры государственного учреждения 8</a></div>
      <div class="col-4 themed-grid-col"><a href="http://v8.1c.ru/svod/" style="color:red" target="_blank">1С:Свод отчетов 8</a></div>
    </div>

    <div class="row mb-3 text-center">
      <div class="col-4 themed-grid-col"><a href="http://v8.1c.ru/budgrep/" style="color:red" target="_blank">1С:Бюджетная отчетность 8</a></div>
      <div class="col-4 themed-grid-col"><a href="http://v8.1c.ru/statedoc/" style="color:red" target="_blank">1С:Документооборот государственного учреждения 8</a></div>
      <div class="col-4 themed-grid-col"><a href="http://v8.1c.ru/gmz/" style="color:red" target="_blank">1С:Государственные и муниципальные закупки 8</a></div>
    </div>

    <div class="row mb-3 text-center">
      <div class="col-4 themed-grid-col"><a href="http://v8.1c.ru/budget_poseleniya/" style="color:red" target="_blank">1С:Бюджет поселения 8</a></div>
      <div class="col-4 themed-grid-col"><a href="http://v8.1c.ru/bmo/" style="color:red" target="_blank">1С:Бюджет муниципального образования 8</a></div>
      <div class="col-4 themed-grid-col"><a href="http://v8.1c.ru/money/" style="color:red" target="_blank">1C:Деньги 8</a></div>
    </div>

  </div>
  
</main>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>