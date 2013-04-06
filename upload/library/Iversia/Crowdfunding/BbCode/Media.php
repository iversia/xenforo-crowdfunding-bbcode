<?

class Iversia_Crowdfunding_BbCode_Media {

	public static function kickstarter($mediaKey, array $site)
	{
		$kickstarter = preg_replace('[KICK_ID]', $mediaKey, $site['embed_html']);

		return $kickstarter;
	}
}