<h1>Добро пожаловать!</h1>
<p>
    <a>Сайт для конференций</a>
<pre>
    <?php
    try {
        $result = [];
        $DB = new Model_Conf();
        $data = $DB->select('SELECT id,Title,Date from conf');
        foreach ($data as $datum) {
            ?>
            <ul class="list-group">
  <li class="list-group-item active" aria-current="true"><?= $datum['Title'] ?></li>
  <li class="list-group-item"><?= $datum['Date'] ?></li>
  <li class="list-group-item"><a href="/edit?id=<?= $datum['id'] ?>">Edit</a></li>
  <li class="list-group-item"><a href="/delete?id=<?= $datum['id'] ?>"">Delete</a></li>
  <li class="list-group-item"><a href="/details?id=<?= $datum['id'] ?>"">Details</a></li>
</ul>
            <?php
        }
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    ?>
</pre>
</p>