<?php

namespace Application\Multimedia\CoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MultimediaCoreBundle extends Bundle
{
    public function getParent()
    {
        return 'ApplicationSonataPageBundle';
    }
}
