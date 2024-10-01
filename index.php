<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/semantic.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="ui borderless stackable inverted menu">
            <div class="header item">
                <a href="index.php">Joomantic</a>
            </div>
            <jdoc:include type="modules" name="menu" style="none" />
        </div>
    </header>
    <main>
         <!-- Load 'Top-a' container if one exists -->
        <?php if ($this->countModules('top-a')) : ?>
            <div class="ui fluid container">
                <jdoc:include type="modules" name="top-a" style="none" />
            </div>
        <?php endif; ?>
        <!-- Load 'Top-b' container if one exists -->
        <?php if ($this->countModules('top-b')) : ?>
            <div class="ui fluid container">
                <jdoc:include type="modules" name="top-b" style="none" />
            </div>
        <?php endif; ?>

        <!-- Load sidebar on right if one exists -->
        <?php if($this->countModules('sidebar')):?>
        <div class="ui main text container">
            <div class="ui stackable grid">
                <div class="twelve wide column">
                    <jdoc:include type="component" />
                </div>
                <div class="four wide column">
                    <jdoc:include type="modules" name="sidebar" style="none" />
                </div>
            </div>
        </div>
        <?php else: ?>
        <!-- If no sidebar exists, only load the article content into the component -->
        <div class="ui main text container">
            <jdoc:include type="component" />
        </div>
        <?php endif; ?>
        
        <!-- Load 'Bottom-a' container if one exists -->
        <?php if ($this->countModules('bottom-a')) : ?>
            <div class="ui fluid container">
                <jdoc:include type="modules" name="bottom-a" style="none" />
            </div>
        <?php endif; ?>
        <!-- Load 'Bottom-b' container if one exists -->
        <?php if ($this->countModules('bottom-b')) : ?>
            <div class="ui fluid container">
                <jdoc:include type="modules" name="bottom-b" style="none" />
            </div>
        <?php endif; ?>
    </main>
    <footer>
        <div class="ui vertical footer segment">
            <div class="ui center aligned container">
                <div class="ui stackable divided grid">
                    <?php if ($this->countModules('footer-leftCol')) : ?>
                        <div class="four wide column">
                            <jdoc:include type="modules" name="footer-leftCol" style="none" />
                        </div>
                    <?php endif; ?>
                    <?php if ($this->countModules('footer-centerCol')) : ?>
                        <div class="four wide column">
                            <jdoc:include type="modules" name="footer-centerCol" style="none" />
                        </div>
                    <?php endif; ?>
                    <?php if ($this->countModules('footer-rightCol')) : ?>
                        <div class="eight wide column">
                            <jdoc:include type="modules" name="footer-rightCol" style="none" />
                        </div>
                    <?php endif; ?>
                </div>
                <div class="ui inverted divider"></div>
                <p>&copy; <?php echo date('Y'); ?> Your Name. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/semantic.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/template.js"></script>
    
</body>
</html>
