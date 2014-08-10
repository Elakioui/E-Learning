<?php

namespace Learning\ForumBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LearningForumBundle extends Bundle
{
    public function getParent()
    {
        return 'CCDNForumForumBundle';
    }
}
