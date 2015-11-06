<?php
namespace lib\Form\Extension;

use lib\Form\Interfaces\ExtensionFormInterface;
use lib\Form\Extension\ExtensionForm;

class Client1ExtensionFormHandler implements ExtensionFormInterface
{
    public function getExtensionForm()
    {
        $html = <<<  _HTML_
<tr>
  <th>
    Review
  </th>
  <td>
    <textarea>Please feel free to write your review</textarea>
  </td>
</tr>

_HTML_;

        $form = new ExtensionForm($html);
        return $form->getForm();
    }
}
