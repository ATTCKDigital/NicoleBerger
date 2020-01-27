console.log('loaded', '/nicoleberger/js/components.js');

import FLEXLAYOUT from 'flexlayout/js/clientNamespace';

// import your child components
import Representation from '../components/component_representation/representation';

// then add them to this object
FLEXLAYOUT.ChildComponents = {
	'Representation': Representation
};
