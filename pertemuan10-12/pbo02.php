<?php 
class FORM
{
    var $fields = array();
    var $action;
    var $submit = "Submit Form";
    var $jumField = 0;

    function  __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }
    function displayForm()
    {
        echo "<form action='".$this->action."' method='POST'>";
        echo "<table widht='100%'>";
        for ($i=0; $i <count($this->fields); $i++) { 
            echo "<tr><td align='right'>".$this->fields[$i]['label']."</td>";
            echo "<td><input type='text' name='".$this->fields[$i]['name']."'></<td></tr>";
        }
        echo "<tr><td colspan='2'>";
        echo "<input type='submit' value='".$this->submit."'></td></tr>";
        echo "</table>";
    }
    function addField($name, $label)
    {
        $this->fields [$this->jumField]['name'] = $name;
        $this->fields [$this->jumField]['label'] = $label;
        $this->jumField ++;
    }
}
?>