<div class="show">
    <?php $note = $params['note'] ?? null; ?>
    <?php if ($note): ?>
        <ul>
            <li>
                Id: <?php echo (int) $note['id'] ?> 
            </li>
            <li>
                Tytuł: <?php echo $note['title'] ?>
            </li>
            <li>
                Opis: <?php echo $note['description'] ?>
            </li>
            <li>
                Utworzono: <?php echo $note['created'] ?>
            </li>
            <li>
                <a href="/">
                    <button>Powrót do listy notatek</button>
                </a>
            </li>
            <!-- Tutaj trzeba utworzyć kolejne li, a w nim jak powyżej button tylko zamiast
            listy notatek ma być "edytuj" i ma przekierowywać do URL z action=edit i
            przyjmować if tej notatki analogicznie jak już t orobiliśmy -->
        </ul>
        <?php else : ?>
            <div>Brak notatki do wyświetlenia</div>
        <?php endif; ?>
</div>