<?hh

if (!apc_fetch('foo')) {
  apc_store('foo', 1);
  include 'fpushclsmethod-unique-volatile.inc';
} else {
  apc_store('foo', 0);
}

function main($i) {
  X::foo($i);
}

for ($i = 0; $i < 100; $i++) main($i);
