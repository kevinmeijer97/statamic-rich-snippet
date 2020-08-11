<?php
/*
 * *
 *  *  * Copyright (C) OptimoApps - All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <info@optimoapps.com>
 *  *
 *
 */

namespace OptimoApps\RichSnippet\Tags;

class NewsArticleTags extends AbstractTags
{
    /**
     * @var string
     */
    protected static $handle = 'news_article_schema';

    /**
     * @return string|null
     */
    public function index(): ?string
    {
        return $this->getNewsArticleSchema();
    }
}
