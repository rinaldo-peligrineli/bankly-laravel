<?php

namespace WeDevBr\Bankly\Support\Contracts;

use Illuminate\Contracts\Support\Arrayable;
use WeDevBr\Bankly\Inputs\DocumentAnalysis;

/**
 * DocumentInterface interface
 *
 * PHP version 7.4|8.0
 *
 * @author    WeDev Brasil Team <contato@wedev.software>
 * @author    Rafael Teixeira <rafaeldemeirateixeira@gmail.com>
 * @copyright 2020 We Dev Tecnologia Ltda
 *
 * @link      https://github.com/wedevBr/bankly-laravel
 */
interface DocumentInterface extends Arrayable
{
    public function setFilePath(string $path): DocumentAnalysis;

    public function getFileName(): string;

    /**
     * @return void
     */
    public function getFileContents();

    public function setFieldName(string $name): DocumentAnalysis;

    public function setProvider(string $provider): DocumentAnalysis;

    public function setEncrypted(?string $encrypted = null): DocumentAnalysis;

    public function getDocumentSide(): string;

    public function getDocumentType(): string;

    public function getFieldName(): string;

    public function getProvider(): string;

    public function getProviderMetadata(): array;
}
