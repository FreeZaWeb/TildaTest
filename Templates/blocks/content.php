<main>
    <div class="wrapper">

        <h2>Задание #1</h2>
        <h3>HTML render handler</h3>

        {{stepWidgetHTML}}

        <h3>JSON render handler</h3>

        <code class="jsonCode">{{stepWidgetJSON}}</code>


        <h3>Клиентский код:</h3>

        <pre><code class="language-php">
use Examples\StepWidget\StepWidget;
use Examples\StepWidget\StepWidgetRenderHtml;

$renderHandler = (new StepWidgetRenderHtml());

$stepWidget = (new StepWidget())->setMaxNumber(100)->setRenderHandler($renderHandler);

echo $stepWidget->render();
            </code></pre>





        <h2>Задание #2</h2>
        {{randomTable}}

        <h3>Клиентский код:</h3>
        <pre><code class="language-php">
use Examples\RandomTable\RandomTable;
use Examples\RandomTable\TableSummatorWidget;

$RandRange = new RandomRangeFromMinToMax(0, 1000);
$tableBuilder = new RandomTable();

$table = $tableBuilder
    ->setRowsSize(5)
    ->setColumnsSize(7)
    ->generateNumbers($RandRange->getVector());

echo (new TableSummatorWidget($table))->getView();
</code></pre>


        <h2>Задание #3</h2>
        <p>Прямо сейчас отрабатывает в шапке и подвале</p>

        <pre><code class="language-php">//Тут кода нет =)</code></pre>

        <p>В связи с тем, что задача простая, писать str_replace() в одну строку нет смысла. Предположу что основная загвоздка в определении города по IP.</p>
        <p>Так что в голове у меня некая абстрактная проблема, и ее решение продиктовано вымышленным ТЗ</p>

        <ol>
            <li>Запрос города по IP производится к стороннему API</li>
            <li>Необходим механизм быстрой смены провайдера данных</li>
            <li>Сохранять результаты запросов в БД, для экономии денег, так как каждый запрос к провайдерам платный</li>
            <li>Компонент должен заменять телефон во всех шаблонах без внесения изменения в сами шаблоны</li>
        </ol>

        <p>Цепочку реализации можно начать рассматривать с класса <b>Examples\Geo\PhoneMiddleware</b></p>

        <p><b>PS.</b> Учитывая тот факт, что сейчас сервер запущен локально, то и IP у нас 127.0.0.1, в связи с этим IP адрес жестко прописан в PhoneMiddleware, я оставил несколько других закоментированных IP с разных городов для демонстации</p>
        <p><b>PS2.</b> Прошу рассматривать код 3го тестового задания с учетом того, что многие вещи такие как проверки, валидация и прочее были упрощены для экономии вашего времени на прочтение кода. Я старался передать основную логику</p>

    </div>
</main>
