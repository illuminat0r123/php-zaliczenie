<h3>Edycja notaki</h3>
<div>
    <?php
    $note = $params['note'] ?>
    <?php if (!empty($params['note'])) : ?>
        <form action="/?action=edit" class="note-form" method="post">
            <ul>
                <li>
                    <label for="title">Tytuł <span class="required"></span></label>
                    <input type="text" name="title" class="field-long" value="<?php echo $note['title'] ?>">
                </li>
                <li>
                    <label for="field5">Treść</label>
                    <textarea name="description" id="fieldt 5" class="field-long field-textarea">
                        <?php echo $note['description'] ?>
                    </textarea>
                </li>
                <li>
                    <input type="submit" value="Submit">
                </li>
            </ul>
        </form>
    <?php else : ?>
        <div>
            Brak notatki do wyswietlenia
            <a href="/"><button>Powrót do listy notatek</button></a>
        </div>

    <?php endif; ?>
</div>