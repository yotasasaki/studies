<?php
namespace lib\Form\Extension;

use lib\Form\Interfaces\ExtensionFormInterface;
use lib\Form\Extension\ExtensionForm;

class Client2ExtensionFormHandler implements ExtensionFormInterface
{
    public function getExtensionForm()
    {
        $html = <<<  _HTML_
<tr>
  <th>
    Inquiry 
  </th>
  <td>
    <textarea>Please feel free to contact us1</textarea>
  </td>
</tr>
<tr>
  <th>
     Occupation
  </th>
  <td>
    <select name="occupation">
      <option value="officeworker">Office Worker</option>
      <option value="musician">Musician</option>
    </select>
  </td>
</tr>


_HTML_;

        $form = new ExtensionForm($html);
        return $form->getForm();
    }
}
