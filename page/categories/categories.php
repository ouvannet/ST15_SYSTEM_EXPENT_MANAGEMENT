<?php

session_start();


$_SESSION['categories'] = [];


// Sample static data (already existing categories)
if (empty($_SESSION['categories'])) {
    $_SESSION['categories'] = [
        ['id' => 1, 'name' => 'Food & Groceries', 'date' => '2024-08-20'],
        ['id' => 2, 'name' => 'Transportati', 'date' => '2024-08-21'],
        ['id' => 3, 'name' => 'name1', 'date' => '2022-08-21'],
        ['id' => 1, 'name' => 'Food & Groceries', 'date' => '2024-08-20'],
        ['id' => 2, 'name' => 'Transportati', 'date' => '2024-08-21'],
        ['id' => 3, 'name' => 'name1', 'date' => '2022-08-21'],

    ];
}

//var_dump($_SESSION);

?>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Category Management</h2>
        <!-- Button to Open the Modal -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal">Add New Category</button>
    </div>

    <!-- Search Bar -->
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search categories...">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Search</button>
        </div>
    </div>

    <!-- Table -->
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Date Created</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody id="categoryTable">
            <?php
            // Display categories from the session
            foreach ($_SESSION['categories'] as $index => $category) {
                echo "<tr>";
                echo "<th scope='row'>" . ($index + 1) . "</th>";
                echo "<td>{$category['name']}</td>";
                echo "<td>{$category['date']}</td>";
                echo "<td>
                            <button class='btn btn-sm btn-warning'>Edit</button>
                            <button class='btn btn-sm btn-danger'>Delete</button>
                          </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Pagination (optional) -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>

<!-- Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addCategoryForm" action="add_category.php" method="POST">
                    <div class="form-group">
                        <label for="categoryName">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" name="categoryName" required>
                    </div>
                    <div class="form-group">
                        <label for="categoryDate">Date Created</label>
                        <input type="date" class="form-control" id="categoryDate" name="categoryDate" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="addCategoryForm">Save Category</button>
            </div>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>