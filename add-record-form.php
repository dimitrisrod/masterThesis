<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Φόρμα Εισαγωγής Δεδομένων</title>
<form action="index.html">
<input name="button" type="submit" value="Επιστροφή">
</form>

</head><br>
<h2>Εισάγετε τα δεδομένα του νέου προϊόντος στα παρακάτω πεδία!</h2>
<h4>Τα πεδία με αστερίσκο (*) δέχονται μόνο αριθμητικούς χαρακτήρες</h4>
<h4>Στα πεδία που δεν υπάρχει περιεχόμενο για εισαγωγή προσθέστε μια παύλα(-) και στα αριθμητικά πεδία (*) το μηδέν (0)</h4>
<body background="bg_main1.png">
<form action="insert.php" method="post">
	<p>
    	<label for="title">Κατηγορία:</label>
        <input type="text" name="title" id="title" required>
    </p>
    <p>
    	<label for="descr">Είδος:</label>
        <input type="text" name="descr" id="descr" required>
    </p>
    <p>
    	<label for="company">Εταιρεία Κατασκευής:</label>
        <input type="text" name="company" id="company" required>
    </p>
<p>
    	<label for="model">Μοντέλο:</label>
        <input type="text" name="model" id="model" required>
    </p>
<p>
    	<label for="description">Περιγραφή Τεχνολογίας:</label>
        <input type="text" name="description" id="description" required>
    </p>
<p>
    	<label for="greekmarket">Εφαρμογή στην Ελλάδα:</label>
        <input type="text" name="greekmarket" id="greekmarket" required>
    </p>
<p>
    	<label for="cost">Κόστος Επένδυσης(€):</label>
        <input type="text" name="cost" id="cost" required>*
    </p>
<p>
    	<label for="power">Δυναμικότητα(L/d):</label>
        <input type="text" name="power" id="power" required>*
    </p>
<p>
        <label for="capacity">Χωρητικότητα:</label>
        <input type="text" name="capacity" id="capacity" required>*
    </p>
<p>
        <label for="consumption">Κατανάλωση:</label>
        <input type="text" name="consumption" id="consumption" required>*
    </p>
<p>
        <label for="ecoper">Ποσοστό εξοικονόμησης:</label>
        <input type="text" name="ecoper" id="ecoper" required>*
    </p>
<p>
        <label for="energy">Ενεργειακή Κλάση:</label>
        <input type="text" name="energy" id="energy" required>
    </p>

<p>
    	<label for="demands">Απαιτήσεις Συντήρησης:</label>
        <input type="text" name="demands" id="demands" required>
    </p>
<p>
    	<label for="economy">Δυνατότητες Επαναχρησιμοποίησης:</label>
        <input type="text" name="economy" id="economy" required>
    </p>
<p>
    	<label for="us">Δυνατότητες Επεξεργασίας:</label>
        <input type="text" name="us" id="us" required>
    </p>
<p>
    	<label for="website">Ιστότοπος:</label>
        <input type="text" name="website" id="website" required>
    </p>
<p>
    	<label for="info">Πληροφορίες:</label>
        <input type="text" name="info" id="info" required>
    </p><hr>
    <input type="submit" value="Εισαγωγή Δεδομένων">
</form>
</body>
</html>
