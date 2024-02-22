<main class="main-container">
<section id="intro-section">
<h2><?= esc($title) ?></h2>
</section>
</main>
<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<main class="main-container">
<section id="intro-section">
<form action=" <?php echo site_url('news'); ?> " method="post">
    <?= csrf_field() ?>

    <label for="title">Name</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br><br>
    <label for="body">Poem Idea Suggestions</label>
    <textarea name="body" cols="45" rows="3"><?= set_value('body') ?></textarea>
    <br><br>
	<label for="body">Comments</label>
    <textarea name="body" cols="45" rows="3"><?= set_value('body') ?></textarea>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</section>
</main>