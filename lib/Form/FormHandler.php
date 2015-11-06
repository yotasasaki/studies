<?php
namespace lib\Form;

use lib\Form\Interfaces\FormInterface;

#require_once __DIR__ . "/Interfaces/FormInterface.php";

class FormHandler implements FormInterface
{
    private $_form;

    public function __construct(Form $form)
    {
        $this->_form = $form;
    }

    public function getMainForm()
    {
        $html = <<< _HTML_

<tr>
  <th>
     Your Name
   </th>
   <td>
     <input type="text" name="member_id">
    </td>
</tr

_HTML_;

        return $this->_form->getForm($html);
    }

    public function getFormHeader($method = NULL, $action = NULL)
    {
        $html = <<< _HTML_
<h1>FORM</h1>
<form method="{$method}" action="{$action}">
<table>

_HTML_;

        return $this->_form->getForm($html);
    }

    public function getFormFooter()
    {
        $html = <<< _HTML_

<tr>
  <th></th>
  <td>
    <input type="submit" value="send">
  </td>
</tr>

</table>
</form>
<p>Extensible Form Sample</p>
_HTML_;

        return $this->_form->getForm($html);
    }
}
