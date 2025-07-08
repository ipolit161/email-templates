<?php

namespace Visualbuilder\EmailTemplates\Facades;

use Illuminate\Support\Facades\Facade;

class TokenHelper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Visualbuilder\EmailTemplates\Contracts\TokenReplacementInterface::class;
    }
//<p>Dear ##user.name##,</p>
//                                <p>Thanks for registering with ##config.app.name##.</p>
//                                <p>If you need any assistance please contact our customer services team ##config.email-templates.customer-services.email## who will be happy to help.</p>
//                                <p>Kind Regards<br>
//                                ##config.app.name##</p>
    public static function replace(string $content, $models): string
    {
        return static::resolveFacadeInstance(static::getFacadeAccessor())->replaceTokens($content, $models);
    }
}
