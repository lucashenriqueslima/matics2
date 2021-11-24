<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mr-auto text-gray-800"><i class="fas fa-industry"></i></i> Empresas</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabela de Empresas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <div id="grid-table"></div>

            <script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>

<script>
    const grid = new gridjs.Grid({
      pagination: true,
  search: {
    server: {
      url: (prev, keyword) => `${prev}?search=${keyword}`
    }
  },
  columns: ['Title', 'Director', 'Producer'],
  server: {
    url: 'https://swapi.dev/api/films/',
    then: data => data.results.map(movie => [movie.title, movie.director, movie.producer])
  } 
}).render(document.getElementById("grid-table"));

document.addEventListener("keydown", (e) => {
  console.log(prev)
})

</script>