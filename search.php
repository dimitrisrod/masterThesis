<html>
<style type="text/css">
</style>
<body background="bg_main1.png">
<meta charset="utf-8">
<title>Σελίδα Αναζήτησης</title>
<form action="index.html">
<input name="button" type="submit" value="Επιστροφή">
</form>
<form action="results.php" method="get" style="text-align: center">
  <label for="query2"><span style="text-align: center"><strong><br>
      Λέξη ή φράση:</strong></span></label>
  <span style="text-align: center">
<input id="query" name="query" placeholder="Πληκτρολογήστε.." />
<input type="submit" value="Aναζήτηση"/><br>

</span>
<hr>
<span style="text-align: center">
<label for="category"><strong><br>
  Επιλέξτε Συγκεκριμένο Πεδίο Αναζήτησης</strong></label>
<br>
<input type="radio" name="category" value="ALL" > Όλα τα παρακάτω πεδία<br>
<input type="radio" name="category" value="id:" > ID<br>
  <input type="radio" name="category" value="title:"> Κατηγορία<br>
  <input type="radio" name="category" value="descr:"> Είδος <br>
  <input type="radio" name="category" value="company:"> Εταιρεία Κατασκευής <br>
  <input type="radio" name="category" value="model:"> Μοντέλο <br>
  <input type="radio" name="category" value="description:"> Περιγραφή Τεχνολογίας <br>
  <input type="radio" name="category" value="greekmarket:"> Εφαρμογή στην Ελλάδα<br>
  <input type="radio" name="category" value="cost:"> Κόστος Επένδυσης (€)<br>
  <input type="radio" name="category" value="power:"> Δυναμικότητα (L/d)<br>
  <input type="radio" name="category" value="capacity:"> Χωρητικότητα<br>
  <input type="radio" name="category" value="consumption:"> Κατανάλωση<br>
  <input type="radio" name="category" value="ecoper:"> Ποσοστό εξοικονόμησης<br>
  <input type="radio" name="category" value="energy:"> Ενεργειακή κλάση<br>
  <input type="radio" name="category" value="demands:"> Απαιτήσεις Συντήρησης<br>
  <input type="radio" name="category" value="economy:"> Δυνατότητες Επαναχρησιμοποίησης<br>
  <input type="radio" name="category" value="us:"> Δυνατότητες Επεξεργασίας<br>
  <input type="radio" name="category" value="website:"> Ιστότοπος<br>
  <input type="radio" name="category" value="info:"> Πληροφορίες<br>
</span>
<hr>

<span style="text-align: center">
<input type="checkbox" name="distance" value="YES">
Αναζήτηση Κλειδιών με απόσταση

<select name="dnum">
  <option value=""></option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>

λέξεων στο κείμενο.
</span>
<hr>


<span style="text-align: center">
<label><b>Κόστος Επένδυσης</b></label>
<br>
Να υπολογισθεί<input type="checkbox" name="number" value="1"><br>
Ελάχιστο Όριο:
  <input type="number" name="down" min="1" max="2000000" value="1"><br>
Μέγιστο Όριο:
  <input type="number" name="up" min="10" max="2000000" value="2000000">
</span>
<hr>
<span style="text-align: center">
<label><b>Δυναμικότητα</b></label>
<br>
Να υπολογισθεί<input type="checkbox" name="number1" value="1"><br>
Ελάχιστο Όριο:
  <input type="number" name="down1" min="1" max="20000" value="1"><br>
Μέγιστο Όριο:
 <input type="number" name="up1" min="10" max="20000" value="20000">
</span>
<hr>

<span style="text-align: center">
<label><b>Χωρητικότητα</b></label>
<br>
Να υπολογισθεί<input type="checkbox" name="number2" value="1"><br>
Ελάχιστο Όριο:
  <input type="number" name="down2" min="1" max="1000" value="1"><br>
Μέγιστο Όριο:
 <input type="number" name="up2" min="1" max="1000" value="1000">
</span>
<hr>

<span style="text-align: center">
<label><b>Κατανάλωση</b></label>
<br>
Να υπολογισθεί<input type="checkbox" name="number3" value="1"><br>
Ελάχιστο Όριο:
  <input type="number" name="down3" min="1" max="100" value="1"><br>
Μέγιστο Όριο:
 <input type="number" name="up3" min="1" max="100" value="100">
</span>
<hr>

<span style="text-align: center">
<label><b>Ποσοστό εξοικονόμησης(%)</b></label>
<br>
Να υπολογισθεί<input type="checkbox" name="number4" value="1"><br>
Ελάχιστο Όριο:
  <input type="number" name="down4" min="1" max="100" value="1"><br>
Μέγιστο Όριο:
 <input type="number" name="up4" min="1" max="100" value="100">
</span>
<hr>


<span style="text-align: center">
<label><b>Περισσότερες Επιλογές</b></label>
<br>
Κατηγορία Προϊόντος 
<select name="cat">
  <option value="">Χωρίς επιλογή</option>
  <option value=" AND title:ΓΚΡΙΖΟΥ ΝΕΡΟΥ">Συστήματα Ανακύκλωσης Γκρίζου Νερού</option>
  <option value=" AND title:ΕΠΕΞΕΡΓΑΣΙΑΣ ΛΥΜΑΤΩΝ ΣΕ ΕΠΙΠΕΔΟ ΚΑΤΟΙΚΙΑΣ AND -title:ΜΙΚΡΩΝ ΟΙΚΙΣΜΩΝ">Συστήματα Επεξεργασίας Λυμάτων σε Επίπεδο Κατοικίας</option>
  <option value=" AND title:ΜΙΚΡΩΝ ΟΙΚΙΣΜΩΝ">Συστήματα Επεξεργασίας Λυμάτων Μικρών Οικισμών</option>
  <option value=" AND title:ΔΙΑΘΕΣΗΣ ΟΜΒΡΙΩΝ">Συστήματα Συλλογής και Διάθεσης Ομβρίων σε Επίπεδο Κατοικίας</option>
  <option value=" AND title:ΕΞΟΙΚΟΝΟΜΗΣΗΣ">Συσκευές Εξοικονόμησης Νερού</option>
  <option value=" AND title:ΔΙΑΧΕΙΡΙΣΗΣ">Κεντρικά Συστήματα Διαχείρισης Ομβρίων</option>
</select>
<br>
Προμηθευτής στην Ελλάδα 
<select name="greece">
  <option value="">Χωρίς επιλογή</option>
  <option value=" AND greekmarket:δεν">Όχι</option>
  <option value=" AND -greekmarket:δεν">Ναι</option>
</select>
<br>
Απαιτήσεις Συντήρησης 
<select name="dem">
  <option value="">Χωρίς επιλογή</option>
  <option value=" AND demands:φίλτρων">Καθαρισμός των φίλτρων</option>
  <option value=" AND demands:αντλίας">Συντήρηση της αντλίας</option>
  <option value=" AND demands:ταμπλέτας χλωρίωσης">Προμήθεια της ταμπλέτας χλωρίωσης</option>
  <option value=" AND demands:βιόφιλτρου">Καθαρισμός βιόφιλτρου</option>
  <option value=" AND demands:Η/Μ">Συντήρηση Η/Μ εξoπλισμού</option>
  <option value=" AND demands:μεμβρανών">Αντικατάσταση/Καθαρισμός μεμβρανών</option>
  <option value=" AND demands:αερισμού">Συντήρηση συστήματος αερισμού</option>
  <option value=" AND demands:πιεστικού διανομής">Συντήρηση πιεστικού διανομής</option>
  <option value=" AND demands:φυσητήρων">Γενικός έλεγχος/συντήρηση φυσητήρων</option>
  <option value=" AND demands:στεγανότητας">Έλεγχος στεγανότητας</option>
  <option value=" AND demands:χημικών">Προμήθεια χημικών</option>
  <option value=" AND demands:περίσσειας">Συντήρηση αντλίας περίσσειας</option>
  <option value=" AND demands:επιφανειακού αεριστήρα και αντλίας ιλύος">Συντήρηση επιφανειακού αεριστήρα και αντλίας ιλύος</option>
  <option value=" AND demands:εκκένωση">Εκκένωση συστήματος</option>
  <option value=" AND demands:πληρωτικού">Καθαρισμός πληρωτικού μέσου</option>
  <option value=" AND demands:υδροροή">Καθαρισμός φίλτρου υδροροής</option>
  <option value=" AND demands:οικοπέδου">Συντήρηση οικοπέδου</option>
  <option value=" AND demands:φυτών">Συντήρηση φυτών</option>
</select>

<br>

Δυνατότητες Επαναχρησιμοποίησης 
<select name="eco">
  <option value="">Χωρίς επιλογή</option>
  <option value=" AND economy:άρδευση">Άρδευση</option>
  <option value=" AND economy:τουαλέτα">Ανακύκλωση στην τουαλέτα</option>
  <option value=" AND economy:αυτοκινήτου">Πλύση αυτοκινήτου</option>
  <option value=" AND economy:εξωτερικών">Πλύση εξωτερικών χώρων</option>
</select>

<br>

Δυνατότητες Επεξεργασίας 
<select name="usage">
  <option value="">Χωρίς επιλογή</option>
  <option value=" AND us:νιπτήρα">Λύματα από νιπτήρα</option>
  <option value=" AND us:μπάνιο">Λύματα από μπάνιο</option>
  <option value=" AND us:ντους">Λύματα από ντους</option>
  <option value=" AND us:ρούχων">Λύματα από πλυντήριο ρούχων</option>
  <option value=" AND us:αστικά">Αστικά λύματα</option>
  <option value=" AND us:όμβρια">Όμβρια λύματα</option> 
</select>

<br>

Ενεργειακή Κλάση
<select name="energy">
  <option value="">Χωρίς επιλογή</option>
  <option value=" AND energy:1*">*</option>
  <option value=" AND energy:2*">**</option>
  <option value=" AND energy:3*">***</option>
  <option value=" AND energy:Α">A</option>
  <option value=" AND energy:Α+">A+</option>
  <option value=" AND energy:Α++">A++</option>
  <option value=" AND energy:Α+++">A+++</option>
</select>


</span>
</form> 
</body>
</html>
