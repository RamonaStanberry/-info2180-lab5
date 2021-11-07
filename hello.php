<!DOCTYPE html>
<html>
    <head>
        <title>PHP and MySQL Examples</title>
        <link rel="stylesheet" href="world.css" type="text/css" />
    </head>
    <body>
        <?php if(!isset($context)){ ?>
        <table>
            <caption>List of Countries</caption>
            <thead>
            <tr>
                <th>Name</th>
                <th>Continent</th>
                <th>Independence</th>
                <th>Head of State </th>
                
            </tr>
            </thead>
            <tbody>
                <?php foreach ($cntry_results as $row): ?>
                    <tr>
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['continent']; ?></td>
                        <td><?= $row['independence_year']; ?></td>
                        <td><?= $row['head_of_state']; ?> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php }else {?>

        <table>
            <caption>List of Cities</caption>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>District</th>
                    <th>Population</th> 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($city_results as $city): ?>
                <tr>
                    <td><?= $city['name']; ?></td>
                    <td><?= $city['district']; ?></td>
                    <td><?= $city['population']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php } ?>
    </body>
</html>