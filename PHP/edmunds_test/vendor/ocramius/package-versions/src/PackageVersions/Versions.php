<?php

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const VERSIONS = array (
  'behat/behat' => 'v3.4.3@d60b161bff1b95ec4bb80bb8cb210ccf890314c2',
  'behat/gherkin' => 'v4.5.1@74ac03d52c5e23ad8abd5c5cce4ab0e8dc1b530a',
  'behat/mink' => 'v1.7.1@e6930b9c74693dff7f4e58577e1b1743399f3ff9',
  'behat/mink-browserkit-driver' => 'v1.3.2@10e67fb4a295efcd62ea0bf16025a85ea19534fb',
  'behat/mink-extension' => 'v2.2@5b4bda64ff456104564317e212c823e45cad9d59',
  'behat/mink-goutte-driver' => 'v1.2.1@8b9ad6d2d95bc70b840d15323365f52fcdaea6ca',
  'behat/mink-selenium2-driver' => 'v1.3.1@473a9f3ebe0c134ee1e623ce8a9c852832020288',
  'behat/transliterator' => 'v1.2.0@826ce7e9c2a6664c0d1f381cbb38b1fb80a7ee2c',
  'container-interop/container-interop' => '1.2.0@79cbf1341c22ec75643d841642dd5d6acd83bdb8',
  'fabpot/goutte' => 'v3.2.2@395f61d7c2e15a813839769553a4de16fa3b3c96',
  'guzzlehttp/guzzle' => '6.3.0@f4db5a78a5ea468d4831de7f0bf9d9415e348699',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.4.2@f5b8a8512e2b58b0071a7280e39f14f72e05d87c',
  'instaclick/php-webdriver' => '1.4.5@6fa959452e774dcaed543faad3a9d1a37d803327',
  'ocramius/package-versions' => '1.2.0@ad8a245decad4897cc6b432743913dad0d69753c',
  'ocramius/proxy-manager' => '2.1.1@e18ac876b2e4819c76349de8f78ccc8ef1554cd7',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'sensiolabs/behat-page-object-extension' => 'v2.1.0@bd2a34221ba65ea8c86d8e693992d718de03dbae',
  'symfony/browser-kit' => 'v3.4.3@490f27762705c8489bd042fe3e9377a191dba9b4',
  'symfony/class-loader' => 'v3.4.3@e63c12699822bb3b667e7216ba07fbcc3a3e203e',
  'symfony/config' => 'v3.4.3@cfd5c972f7b4992a5df41673d25d980ab077aa5b',
  'symfony/console' => 'v4.0.3@fe0e69d7162cba0885791cf7eea5f0d7bc0f897e',
  'symfony/css-selector' => 'v3.4.3@e66394bc7610e69279bfdb3ab11b4fe65403f556',
  'symfony/dependency-injection' => 'v4.0.3@67bf5e4f4da85624f30a5e43b7f43225c8b71959',
  'symfony/dom-crawler' => 'v3.4.3@09bd97b844b3151fab82f2fdd62db9c464b3910a',
  'symfony/event-dispatcher' => 'v4.0.3@74d33aac36208c4d6757807d9f598f0133a3a4eb',
  'symfony/filesystem' => 'v4.0.3@760e47a4ee64b4c48f4b30017011e09d4c0f05ed',
  'symfony/polyfill-mbstring' => 'v1.6.0@2ec8b39c38cb16674bbf3fea2b6ce5bf117e1296',
  'symfony/translation' => 'v4.0.3@2bb1b9dac38d32c5afb00edc9371b5db4cf6d000',
  'symfony/yaml' => 'v4.0.3@b84f646b9490d2101e2c25ddeec77ceefbda2eee',
  'zendframework/zend-code' => '3.3.0@6b1059db5b368db769e4392c6cb6cc139e56640d',
  'zendframework/zend-eventmanager' => '3.2.0@9d72db10ceb6e42fb92350c0cb54460da61bd79c',
  '__root__' => 'dev-php@74afc661867e97b68e50383f89a645dda5ef94b7',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException if a version cannot be located
     */
    public static function getVersion(string $packageName) : string
    {
        if (! isset(self::VERSIONS[$packageName])) {
            throw new \OutOfBoundsException(
                'Required package "' . $packageName . '" is not installed: cannot detect its version'
            );
        }

        return self::VERSIONS[$packageName];
    }
}
