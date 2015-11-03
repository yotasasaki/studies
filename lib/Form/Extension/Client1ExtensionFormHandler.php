<?php

require_once __DIR__ . "/../Interface/ExtensionFormInterface.php";
require_once __DIR__ . "/ExtensionForm.php";

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
