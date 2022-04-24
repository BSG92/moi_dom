<section class="table">
    <div id="heading" class="display-6 text-center pb-3"><?php echo $data['heading']; ?></div>

    <table>
        <thead>
            <tr>
                <th>Наименование работ</th>
                <th>Цена</th>
                <th>Ед. изм.</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($data['prices'] as $work) {
                    echo '<tr> <td>' . $work->name_work . '</td> 
                        <td class="price">' . $work->price . ' ₽</td>
                        <td class="quantity">' . $work->measured_by . '</td>
                    </tr>';
                }
            ?>
            <!-- <tr>
                <td>Sample</td>
                <td class="price">500</td>
                <td class="quantity"> sq.m</td>
            </tr> -->
        </tbody>
    </table>
</section>

<style>
    :root {
        --gray-100 : #f9fbff;
        --gray-300 : #E0E0E0;
        --gray-350 : #e1e5ee;
        --gray-400 : #767b91;

    }
    .bg-gray-100{
        background-color: #f9fbff;
    }
    .bg-gray-400{
        background-color: #767b91;
    }
    .bg-green {
        background-color: #c8e6c9;
    }
    .text-green {
        color: #c8e6c9;
    }

    /* *, *::before, *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    } */

    section.table{
        display: grid;
        justify-content: center;
        align-items: center;
        font-size: 1.3rem;
    }

    table{
        border-style: hidden;
        border-radius: 2rem;
        border-collapse: collapse;
        box-shadow: 0 5px 10px var(--gray-300);
        text-align: left;
        overflow: hidden;
        font-family: 'Nunito', sans-serif;
    }
    
    table > thead {
        box-shadow: 0 5px 10px var(--gray-400);
        border-style: hidden;
        background-color: var(--yellow);
        color: black;
    }

    table th {
        padding: 1rem 2rem;
        text-transform: uppercase;
        font-size: 1rem;
        letter-spacing: 0.1rem;
        font-weight: 900;
    }

    table tbody tr:nth-child(even) {
        background-color: var(--gray-300);
    }

    table td {
        padding: 0.5rem 2rem;  
        border-style: hidden;      
    }
    
    table tbody tr {
        transition: all 0.4s ease-in-out;
    }

    table tbody tr:hover {
        background-color: #767b91;
        font-weight: bold;
    }

    table > tbody > tr td.price,
    table > tbody > tr td.quantity {
        text-align: right;
        white-space: nowrap;
    }

    @media (max-width:769px) {
        table {
            font-size: large;
        }
    }
    @media (max-width:550px) {
        #heading {
            font-size: large;
        }

        table {
            font-size: medium;
        }
    }

</style>