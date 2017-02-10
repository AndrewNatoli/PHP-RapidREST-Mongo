VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(2) do |config|

  config.vm.box = "ubuntu/trusty64"
  config.vm.network "private_network", ip: "192.168.63.34"
  config.vm.hostname = "mongoapi.dev"

  config.vm.provider "virtualbox" do |v|
    v.memory = 1536
  end

  # Ansible
  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "vagrant-ansible/playbook.yml"
  end
end
