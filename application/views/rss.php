<?php echo ('<?xml version="1.0" encoding="utf-8" standalone="no"?>'. "\n"); ?>
<rss xmlns:atom="http://www.w3.org/2005/Atom" version="2.0">
    <channel>
        <title>....mindless rantings of a lunatic</title>
        <link>http://www.weatheredwatcher.com/blog</link>
        <description>The Official WeatheredWatcher RSS feed</description>
<?php foreach($entries as $entry): ?>       
 <item>
    <title><?=$entry->title; ?></title>
    <link>http://www.weatheredwatcher.com/blog/<?=$entry->slug; ?></link>

    <description><![CDATA[<?=$entry->entry; ?> ]]></description>
    <pubDate><?=$entry->timestamp; ?></pubDate>
            
        </item>
    <?php endforeach; ?>
</channel>
</rss>