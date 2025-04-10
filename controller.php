<?php

namespace Concrete\Package\AnimatedLogoSlider;

use Concrete\Core\Package\Package;

class Controller extends Package
{
    protected string $pkgHandle = 'animated_logo_slider';
    protected string $pkgVersion = '0.0.1';
    protected $appVersionRequired = '9.0.0';

    public function getPackageDescription(): string
    {
        return t('Display logos in a smooth, continuously looping animated strip using a gallery block template.');
    }

    public function getPackageName(): string
    {
        return t('Animated Logo Slider ');
    }
}