<h2>First Army</h2>

<table class="table table-responsive">
    <thead>
        <tr>
            <?php foreach ( $report->firstArmySlots() as $type => $slot ) {
                echo "<th>" . $type."</th>";
            }
            ; ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ( $report->firstArmySlots() as $type => $slot ) {
                echo "<td>" . $slot."</td>";
            }
            ; ?>
        </tr>
    </tbody>
</table>

<h2>Second Army</h2>

<table class="table table-responsive">
    <thead>
    <tr>
        <?php foreach ( $report->secondArmySlots() as $type => $slot ) {
            echo "<th>" . $type."</th>";
        }
        ; ?>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php foreach ( $report->secondArmySlots() as $type => $slot ) {
            echo "<td>" . $slot."</td>";
        }
        ; ?>
    </tr>
    </tbody>
</table>

<h1 style="margin-top: 100px;">Battle report</h1>

<h2>First Army</h2>

<table class="table table-responsive">
    <thead>
    <tr>
        <?php foreach ( $report->firstArmyAfterBattleSlots() as $type => $slot ) {
            echo "<th>" . $type."</th>";
        } ; ?>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php foreach ( $report->firstArmyAfterBattleSlots() as $type => $slot ) {
            echo "<td>" . $slot."</td>";
        }
        ; ?>
    </tr>
    </tbody>
</table>

<h2>Second Army</h2>

<table class="table table-responsive">
    <thead>
    <tr>
        <?php foreach ( $report->firstArmyAfterBattleSlots() as $type => $slot ) {
            echo "<th>" . $type."</th>";
        }
        ; ?>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php foreach ( $report->secondArmyAfterBattleSlots() as $type => $slot ) {
            echo "<td>" . $slot."</td>";
        }
        ; ?>
    </tr>
    </tbody>
</table>