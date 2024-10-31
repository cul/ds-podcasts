lock "3.9.1"

set :application, 'podcasts'
set :deploy_name, "#{fetch(:application)}_#{fetch(:stage)}"
set :remote_user, "renserv"
set :repo_url, "git@github.com:cul/ds-podcasts.git"
set :deploy_to, "/opt/httpd/www/#{fetch(:application)}_#{fetch(:stage)}"
set :ssh_options, { :forward_agent => true }

set :keep_releases, 2

######################
# WordPress settings #
######################

# Set up important directories
set :wp_docroot, "#{fetch(:deploy_to)}/html"
set :wp_content_path, "#{fetch(:deploy_to)}/wp-content"
set :local_disk_wflogs_path, "/var/log/wflogs/podcasts_dev/wflogs"
set :multisite, true
set :multisite_type, 'subdomains'
set :title, 'DS Podcasts'

# List custom plugins and themes to pull in from repo
set :wp_custom_themes, {
  'checathlon' => 'wp-content/themes/checathlon',
  'ds-podcast-child-theme' => 'wp-content/themes/ds-podcast-child-theme',
  'ds-podcast-landing-theme' => 'wp-content/themes/ds-podcast-landing-theme'
}

set :additional_plugins_from_remote_zip, {
  # Line below is just an example.
  # 'cf-byline' => 'https://github.com/cul/cf-byline/archive/v1.0.0.zip',
}

before 'cul:wp:deploy:create_symlinks', 'cul:wp:deploy:symlink_wflogs_to_var_directory'
