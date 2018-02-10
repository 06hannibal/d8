<?php
/**
 * @file
 * Contains \Drupal\mymodule\Plugin\Block\MyBlock.
 */
namespace Drupal\myblock\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Provides a custom_block.
 *
 * @Block(
 *   id = "myblock",
 *   admin_label = @Translation("My block"),
 *   category = @Translation("my custom first block")
 * )
 */

class MyBlock extends BlockBase {
  /**
  * {@inheritdoc}
  */
public function build() {
  if (\Drupal::currentUser()->hasPermission('sample permission 1')) {
    return [
'#markup' => '<div class="myblock1">
  <p>
  <b>Drupal</b> – is a free and open source content-management framework written in PHP and distributed under the GNU General Public License. Drupal provides a back-end framework for at least 2.3% of all web sites worldwide – ranging from personal blogs to corporate, political, and government sites. Systems also use Drupal for knowledge management and for business collaboration.
  </p>
  <p>
  As of November 2017, the Drupal community is composed of more than 1.3 million members, including 109,000 users actively contributing, resulting in more than 39,000 free modules that extend and customize Drupal functionality, over 2,500 free themes that change the look and feel of Drupal, and at least 1,180 free distributions that allow users to quickly and easily set up a complex, use-specific Drupal in fewer steps.
  </p>
  <p>
  The standard release of Drupal, known as Drupal core, contains basic features common to content-management systems. These include user account registration and maintenance, menu management, RSS feeds, taxonomy, page layout customization, and system administration. The Drupal core installation can serve as a simple Web site, a single- or multi-user blog, an Internet forum, or a community Web site providing for user-generated content.
  </p>
  <p>
  Drupal also describes itself as a Web application framework. When compared with notable frameworks Drupal meets most of the generally accepted feature requirements for such web frameworks.
  </p>
  <p>
  Although Drupal offers a sophisticated API for developers, basic Web-site installation and administration of the framework require no programming skills.
  </p>
  <p>
  Drupal runs on any computing platform that supports both a Web server capable of running PHP and a database to store content and configuration.
  </p>
</div>',
  ];
}else{
  return [
          $build['content'] = ['#markup' => $this->t("Access to view this content is denied. =("),],
          ];
  }
}
}
