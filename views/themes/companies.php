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
      pagination: {
        limit: 1
      },
      language: {
        search: {
          placeholder: 'Procurar...'
        },
        pagination: {
          previous: 'Anterior',
          next: 'Próximo',
          navigate: (page, pages) => `Página ${page} de ${pages}`,
          page: (page) => `Página ${page}`,
          showing: 'Mostrando de',
          of: 'entre',
          to: 'a',
          results: 'resultados',
        }
      },
  search: {
    server: {
      url: (prev, keyword) => `${prev}/${keyword}`
    }
  },
  columns: ['Razão Social', 'Nome Fantasia', 'CNPJ'],
  server: {
    url: 'http://179.254.26.29:888/matics2/api/v1/getcompanies',
    then: data => data.map(companies => [companies.razao_social, companies.nome_fantasia, companies.cnpj]) 
  } 
}).render(document.getElementById("grid-table"));


</script>