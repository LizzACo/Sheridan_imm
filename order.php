<?php
// order.php
// articleId, title, author, date
// include("includes/session.php");
include("includes/header.php");
?>
    <form method = "POST", action ="process-order.php">
        <fieldset>
        <label for="milkId">Milk:</label><br>
        <select name="milkId" id="milkId">
            <option value="1">Whole milk</option>
            <option value="2">Skim milk</option>
            <option value="3">Oat milk</option>
            <option value="4">Soy milk</option>
        </select><br>
        <label for="teaId">Tea:</label><br>
        <select name="teaId" id="teaId">
            <option value="1">Black tea</option>
            <option value="2">Green tea</option>
            <option value="3">Oolong tea</option>
            <option value="4">Jasmine tea</option>
        </select><br>
        <label for="sugarId">Sugar:</label><br>
        <select name="sugarId" id="sugarId">
            <option value="1">Less</option>
            <option value="2">Half</option>
            <option value="3">Original</option>
        </select><br>
        <label for="iceId">Ice:</label><br>
        <select name="iceId" id="iceId">
            <option value="1">Less</option>
            <option value="2">No</option>
            <option value="3">Hot</option>
        </select><br>
        <label for="topping1">Topping one:</label><br>
        <select name="topping1" id="topping1">
            <option value="Pearl">Pearl</option>
            <option value="Red bean">Red bean</option>
            <option value="Grass jelly">Grass jelly</option>
            <option value="Coffee jelly">Coffee jelly</option>
            <option value="Pudding">Pudding</option>
            <option value="A scope of ice cream">A scope of ice cream</option>
        </select><br>
        <label for="topping2">Topping two:</label><br>
        <select name="topping2" id="topping2">
            <option value="Pearl">Pearl</option>
            <option value="Red bean">Red bean</option>
            <option value="Grass jelly">Grass jelly</option>
            <option value="Coffee jelly">Coffee jelly</option>
            <option value="Pudding">Pudding</option>
            <option value="A scope of ice cream">A scope of ice cream</option>
        </select><br>
        <label for="topping3">Topping three:</label><br>
        <select name="topping3" id="topping3">
            <option value="Pearl">Pearl</option>
            <option value="Red bean">Red bean</option>
            <option value="Grass jelly">Grass jelly</option>
            <option value="Coffee jelly">Coffee jelly</option>
            <option value="Pudding">Pudding</option>
            <option value="A scope of ice cream">A scope of ice cream</option>
        </select><br>
        <input type="submit" value="Submit">
        </fieldset>
    </form>

<?php
include("includes/footer.php");
?>