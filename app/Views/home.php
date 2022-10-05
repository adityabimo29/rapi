<?=$this->extend('template')?>

<?=$this->section('content')?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 py-4">
                <div class="cd-table-container">
                    <h2 class="cd-title">Search Monster Name:</h2>
                    <input type="text" class="cd-search table-filter" data-table="order-table"
                        placeholder="Item to filter.." />

                    <table class="cd-table table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>ID</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td data-label="Name">Your data goes here...</td>
                                <td data-label="Email">Email goes here...</td>
                                <td data-label="Phone">Phone number goes here...</td>
                                <td data-label="ID">ID goes here...</td>
                            </tr>
                            <tr>
                                <td data-label="Name">Your data goes here...</td>
                                <td data-label="Email">Email goes here...</td>
                                <td data-label="Phone">Phone number goes here...</td>
                                <td data-label="ID">ID goes here...</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="button-second" role="button">Add Data</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?=$this->endSection()?>